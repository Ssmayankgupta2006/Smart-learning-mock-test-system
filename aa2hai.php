<?php error_reporting(E_ALL); ini_set('display_errors', 1); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="aa2hai.css">
    <title>CTLD Mock</title>
</head>

<body>
    <header>
        <div class="extrabox2haiji">
            <?php
        require "server.php";
        if(isset($_SESSION['fresher'])&&($_SESSION['fresher'])){
            if(isset($_SESSION['username'])&&(isset($_SESSION['new_section']))&&(isset($_SESSION['tca']))&&(isset($_SESSION['login']))&&($_SESSION['login'])&&(isset($_SESSION['database_use']))){
                $tca=$_SESSION['tca'];
                $student=$_SESSION['username'];
                $section=$_SESSION['new_section'];
                $db=$_SESSION['database_use'];
                $db_r_s=$db."_result_sub";
                $db_r=$db."_result";
                $db_t=$db."_test";
                $db_time=$_SESSION['database_time'];
                $db_question=$_SESSION['database_question'];
                $all_check=true;
            }
            else{
                $all_check=false;
            }
        }
        else{
            $all_check=false;
            echo "<div id='fixed'><span id='fixedspan'>1</span></div>";
            echo "<script src='aa2hai2.js'></script>";
        }
    ?>
        </div>
    </header>
    <main>
        <div class="extrabox1">
            <div class='box_con timer'>Time</div>
            <div class='box_con questions'>
                <?php $i=1; while($i<=$db_question){echo " <span id='".$i."'>".$i."</span>"; $i++;}?>
            </div>
        </div>

        <div class="mainhai">
            <?php
            if($all_check){
                {   global $st_submition , $tca , $student, $section , $login , $db , $db_r , $db_r_s , $db_t , $db_time , $db_question;
                }
                $question_right=0;
                $question_wrong=0;
                $question_timeout=0;
                $text="SELECT * FROM `".$db_t."`";
                $text_ex=mysqli_query($conn,$text);
                $text_row=mysqli_num_rows($text_ex);

                // check attempts is set or not if not then go
                if(($_SESSION['attempts']!="Firstattempt")){
                    $text_var2=0;
                    while($text_fetch=mysqli_fetch_assoc($text_ex)){
                        if(!(empty($text_fetch['QUESTION_IMG']))){
                            $questions[$text_var2]=Array(
                                $text_fetch['QUESTION_IMG'],
                                $text_fetch['QUESTION'],
                                $text_fetch['OPTION_1'],
                                $text_fetch['OPTION_2'],
                                $text_fetch['OPTION_3'],
                                $text_fetch['OPTION_4'],
                                $text_fetch['OPTION_5']
                            );
                        }
                        else{
                            $em="";
                            $questions[$text_var2]=Array(
                                $em,
                                $text_fetch['QUESTION'],
                                $text_fetch['OPTION_1'],
                                $text_fetch['OPTION_2'],
                                $text_fetch['OPTION_3'],
                                $text_fetch['OPTION_4'],
                                $text_fetch['OPTION_5']
                            );
                        }
                        $text_var2++;
                    }
                    $option_index=[2,3,4,5];
                    shuffle($questions);
                    shuffle($option_index);
                    $_SESSION['assignment']=$questions;
                    $_SESSION['option']=$option_index;
                }
                else{
                    $questions=$_SESSION['assignment'];
                    $option_index=$_SESSION['option'];
                }
                $img=0;
                echo "<form action='aa2hai.php' method='post' class='formhaiji'>";
                    while($img<$db_question){
                        echo "
                        <div> Question ".($img+1)." ... ".$questions[$img][1]."
                        </div>";

                        if(!(empty($questions[$img][0]))){
                            echo "
                            <div class='imgclass'>
                            <img  src='data:image/png;base64,".$questions[$img][0]."'alt='img' />
                            </div>";
                        }

                        $index1=$option_index[0];
                        echo "
                            <div class='div_input'>
                            <input type='radio' onclick='mm".$img."mm()' name='".($img)."' value='".$questions[$img][$index1]."' />
                            <span>".$questions[$img][$index1]."</span>
                            </div>
                        ";

                        $index2=$option_index[1];
                        echo "
                             <div class='div_input'>
                             <input type='radio' onclick='mm".$img."mm()' name='".($img)."' value='".$questions[$img][$index2]."' />
                             <span>".$questions[$img][$index2]."</span>
                             </div>
                        ";

                        $index3=$option_index[2];
                        echo "
                             <div class='div_input'>
                             <input type='radio' onclick='mm".$img."mm()' name='".($img)."' value='".$questions[$img][$index3]."' />
                             <span>".$questions[$img][$index3]."</span>
                             </div>
                        ";

                        $index4=$option_index[3];
                        echo "
                             <div class='div_input'>
                             <input type='radio' onclick='mm".$img."mm()' name='".($img)."' value='".$questions[$img][$index4]."' />
                             <span>".$questions[$img][$index4]."</span>
                             </div>
                        ";

                        $questionhai=$questions[$img][1];
                        $questionhaiImg=$questions[$img][0];
                        $right=$questions[$img][6];
                        $date_hai=date('Y-m-d');
                        if(($_SERVER['REQUEST_METHOD']=="POST")&&(isset($_POST[($img)]))){
                            if($right==$_POST[($img)]){
                                $answer="Right";
                                $question_right++;
                            }
                            else{
                                $answer="Wrong";
                                $question_wrong++;
                            }
                            $data_in = $conn->prepare("INSERT INTO `".$db_r."`(`QUESTION_IMG`, `QUESTION`, `ANSWER`, `RIGHT ANSWER`, `TCA`, `DATE`, `SECTION NAME`) VALUES (?,?,?,?,?,?,?)");
                            $data_in->bind_param("sssssss",$questionhaiImg, $questionhai, $answer, $right, $tca, $date_hai, $section);
                            $data_in->execute();
                            $data_in->close();
                            $data_insert = true;

                        }
                        else if (($_SERVER['REQUEST_METHOD'] == "POST") && (!(isset($_POST[($img)])))) {
                            $answer = "Time out";
                            $data_in = $conn->prepare("INSERT INTO `".$db_r."`(`QUESTION_IMG`, `QUESTION`, `ANSWER`, `RIGHT ANSWER`, `TCA`, `DATE`, `SECTION NAME`) VALUES (?,?,?,?,?,?,?)");
                            $data_in->bind_param("sssssss",$questionhaiImg, $questionhai, $answer, $right, $tca, $date_hai, $section);
                            $data_in->execute();
                            $data_in->close();
                            $data_insert = true;
                            $question_timeout++;
                        }   
                    echo "
                        <script>
                            function mm".$img."mm(){
                                document.getElementById('".($img+1)."').style.backgroundColor='red';
                            }   
                        </script>
                    ";       
                    $img++;
                }
                echo "<button type='submit' value='submit' name='submit_button' id='submit_hai' onclick='hidfun()'>Submit</button>";
                echo "</form>";

                if (isset($data_insert) && ($data_insert)) {
                     $_SESSION['fresher']=false;
                     $marks_check="SELECT * FROM `test name` WHERE `TEST NAME`='$db';";
                     $marks_check_ex=mysqli_query($conn,$marks_check);
                     $marks_check_fetch=mysqli_fetch_assoc($marks_check_ex);
                     $positivem=$marks_check_fetch['RIGHT MARKS'];
                     $negativem=$marks_check_fetch['WRONG MARKS'];
                     $sum = $db_question;
                     $sumofmarks = $question_right*$positivem - $question_wrong*$negativem;
                     $in = $conn->prepare("INSERT INTO `".$db_r_s."` (`TCA`, `STUDENT NAME`, `DATE`, `SECTION NAME`, `RIGHT ANSWER`, `WRONG ANSWER`, `TIME OUT`, `TOTAL NUMBER OF QUESTION`, `MARKS`)  VALUES (?,?,?,?,?,?,?,?,?)");
                     $in->bind_param("sssssssss", $tca, $student, $date_hai, $section, $question_right, $question_wrong, $question_timeout, $sum, $sumofmarks);
                     $in->execute();
                     $in->close();

                     
                     $test_information_for_home = $conn->prepare("INSERT INTO `students test data information` (`TEST NAME`, `STUDENT NAME`, `STUDENT TCA NUMBER`,`DATE`) VALUES (?,?,?,?)");
                     $test_information_for_home->bind_param("ssss", $db, $student, $tca, $date_hai);
                     $test_information_for_home->execute();
                     $test_information_for_home->close(); 
                     $_SESSION['submit_status']="Submitted";
                     $_SESSION['attempts']="Firstattempt";                        
                    }
                      
                if(($_SERVER['REQUEST_METHOD']=="POST")&&(isset($_POST['submit_button']))){
                    echo "
                    <script>
                        document.querySelector('.timer').innerText = 'You have submitted';
                        document.location.href='result.php';
                    </script>
                    ";
                }
                else{
                   echo "<script>
                    var iteration = 0,
                    min = 0;
                    var timefortest=parseInt('".$db_time."')*60000;
                    var id = setInterval(function () {
                    iteration++;
                    document.querySelector('.timer').innerText = min + ' : ' + iteration;
                    if (iteration == 60) {
                        iteration = 0;
                        min++;
                    }
                    }, 1000);
                    
                    setTimeout(function () {
                    document.querySelector('#submit_hai').click();
                    clearInterval(id);
                    }, timefortest);
                 </script>  "; 
                }
                
            
            $_SESSION['attempts']="Firstattempt";
        }
            ?>
        </div>

        <div class="extrabox2"></div>
    </main>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Beiruti:wght@200..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="result.css" />
    <link rel="icon" href="rightlogo (1).png" />
    <title>Result</title>
</head>

<body>
    <header>
        <div class="name">
            <img src="—Pngtree—college entrance examination results and_5472440.png" height="400px" width="300px"
                alt="">
        </div>
    </header>
    <main>
        <?php
      session_start();
      if((isset($_SESSION['username']))&&(isset($_SESSION['password']))&&(isset($_SESSION['new_section']))){
        $student_name=$_SESSION['username'];
        $tca=$_SESSION['tca'];
        $student_section=$_SESSION['new_section'];
        $pass=$_SESSION['password'];
      }
      ?>
        <div class="container_hai">
            <form action="result.php" method="post">
                <span>
                    <?php
          global $student_name;
          echo "<div>Enter your name</div>";
          if(isset($student_name)){
            echo "<input type='text' name='username' placeholder='Enter your name' value='$student_name' />";
          }
          else{
             echo "<input type='text' name='username' placeholder='Enter your name'/>";
          }
          ?>
                </span>
                <span>
                    <?php
          global $tca;
          echo "<div>Enter your TCA number</div>";
          if(isset($tca)){
            echo "<input type='text' name='tca' placeholder='Enter your TCA number' value='$tca' />";
          }
          else{
             echo "<input type='text' name='tca' placeholder='Enter your TCA number'/>";
          }
          ?>
                </span>
                <span>
                    <?php
          global $pass;
          echo "<div>Enter your password</div>";
          if(isset($pass)){
            echo "<input type='password' name='pass' placeholder='Enter your password' value='$pass' />";
          }
          else{
             echo "<input type='password' name='pass' placeholder='Enter your password'/>";
          }
          ?>
                </span>
                <span>
                    <div>Choose section name</div>
                    <select name="section" id="selecthai">
                        <option>Select Section name</option>
                        <option value='BCA_section_A'>BCA_section_A</option>
                        <option value='BCA_section_B'>BCA_section_B</option>
                        <option value='BCA_section_C'>BCA_section_C</option>
                        <option value='BCA_section_D'>BCA_section_D</option>
                        <option value='BCA_section_E'>BCA_section_E</option>
                        <option value='BCA_section_F'>BCA_section_F</option>
                        <option value='BCA_section_G'>BCA_section_G</option>
                        <option value='BCA_section_H'>BCA_section_H</option>
                        <option value='BCA_section_I'>BCA_section_I</option>
                        <option value='s_c_d_other'>Other = section/course/Department</option>
                    </select>
                </span>
                <span>
                    <?php
          require "server.php";
          $test_op="SELECT * FROM `test name`";
          $test_op_ex=mysqli_query($conn,$test_op);
          echo "<div>Choose your test </div>";
          echo "<select name='database_use' id=''>";
          while($test_op_ex_fetch=mysqli_fetch_assoc($test_op_ex)){
          $db_hai=$test_op_ex_fetch['TEST NAME'];
          echo "<option value='".$db_hai."'>".$db_hai."</option>";
          }
          echo "</select>";
          ?>
                </span>
                <span>
                    <input id="anchotah1" type="submit" value="Submit" name="submit_here" />
                </span>
                <span id="achor">
                    <a href="Student_result_download.php" id="anchotah1"
                        title="Result Download depends on your login test that test will download in which you are login. Does not depends on which test you have chosed above."
                        style="background-color:blue;"><span>Download Result</span></a>
                    <a href="index.php"><span>Home</span></a>
                </span>
            </form>

        </div>
        <?php
        if(($_SERVER['REQUEST_METHOD']=="POST")&&(isset($_POST['submit_here']))){
            require "server.php";
            $username=strtoupper($_POST['username']);
            $pass=($_POST['pass']);
            $section=strtoupper($_POST['section']);
            $tca=strtoupper($_POST['tca']);
            $database_use=($_POST['database_use']);
            $db_r=$database_use."_result";
            $db_r_s=$database_use."_result_sub";
            $data_insert="SELECT `TCA`, `STUDENT NAME`, `DATE`, `SECTION NAME`, `RIGHT ANSWER`, `WRONG ANSWER`, `TIME OUT`, `TOTAL NUMBER OF QUESTION`, `MARKS` FROM `".$db_r_s."` WHERE `TCA`='$tca';";
            $data_ex=mysqli_query($conn,$data_insert);
            $data_fetch=mysqli_fetch_assoc($data_ex);
            if($data_fetch){
                echo "<div class='box1'>
                     <div class='name_of_st'>
                        <div>
                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='25' fill='currentColor' class='bi bi-file-person-fill' viewBox='0 0 16 16'>
                            <path d='M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11'/>
                            </svg>
                            ".$data_fetch['STUDENT NAME']."
                      </div>
                    </div>
                      <div class='result_details'> 
                          <div>
                            <svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='white'><path d='M276-380q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm0 170q-112 0-191-79T6-480q0-112 79-191t191-79q72 0 133 35t95 89h352l146 146-211 210-81-61-80 60-89-63h-37q-35 54-95.5 89T276-210Zm0-106q59 0 103-36t55-88h140l54 37 82-60 70 53 72-70-40-40H434q-12-52-55-88t-103-36q-68 0-116 48t-48 116q0 68 48 116t116 48Z'/>
                            </svg>
                          </div>
                          <div>
                              TCA number ".$data_fetch['TCA']."
                          </div>
                      </div>
                      <div class='result_details'>
                        <div>
                            <svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='#FFFFFF'><path d='M608-124H322q-43.73 0-74.86-31.14Q216-186.27 216-230v-450h106v450h286v106ZM478-732q-36 0-63-27t-27-63q0-36 27-63t63-27q36 0 63 27t27 63q0 36-27 63t-63 27ZM638-56v-216H458q-38.77 0-66.39-27.61Q364-327.23 364-366v-218q0-47.88 33.08-80.94 33.09-33.06 81-33.06Q526-698 559-664.94T592-584v166h58q38.78 0 66.39 27.61Q744-362.77 744-324v268H638Z'/></svg>
                        </div>
                        <div>
                            Section name".$data_fetch['SECTION NAME']."
                        </div>
                      </div>
                      <div class='result_details'>
                          <div>
                              <svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='#FFFFFF'><path d='M248-216 0-464l76-74 174 174 74 74-76 74Zm264 0L264-463l74-76 174 173 376-376 72 78-448 448Zm-18-281-76-74 168-168 76 74-168 168Z'/></svg>
                          </div>
                          <div>
                              Right answer ".$data_fetch['RIGHT ANSWER']."
                          </div>
                      </div>
                      <div class='result_details'>
                        <div>
                            <svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='#FFFFFF'><path d='M316-88 88-316v-328l228-228h328l228 228v328L644-88H316Zm48-202 116-116 116 116 74-74-116-116 116-116-74-74-116 116-116-116-74 74 116 116-116 116 74 74Zm-4 96h240l166-166v-240L600-766H360L194-600v240l166 166Zm120-286Z'/></svg>
                        </div>
                        <div>
                            Wrong answer".$data_fetch['WRONG ANSWER']."
                        </div>
                      </div>
                      <div class='result_details'>
                        <div>
                            <svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='#FFFFFF'><path d='m798-274-60-60q11-27 16.5-53.5T760-440q0-116-82-198t-198-82q-24 0-51 5t-56 16l-60-60q38-20 80.5-30.5T480-800q60 0 117.5 20T706-722l56-56 56 56-56 56q38 51 58 108.5T840-440q0 42-10.5 83.5T798-274ZM520-552v-88h-80v8l80 80ZM792-56l-96-96q-48 35-103.5 53.5T480-80q-74 0-139.5-28.5T226-186q-49-49-77.5-114.5T120-440q0-60 18.5-115.5T192-656L56-792l56-56 736 736-56 56ZM480-160q42 0 82-13t75-37L248-599q-24 35-36 75t-12 84q0 116 82 198t198 82ZM360-840v-80h240v80H360Zm83 435Zm113-112Z'/></svg>
                        </div>
                        <div>
                            Time out".$data_fetch['TIME OUT']."
                        </div>
                      <div>
                      <div class='result_details'>
                        <div>
                            <svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='#FFFFFF'><path d='M240-160v-80l260-240-260-240v-80h480v120H431l215 200-215 200h289v120H240Z'/></svg>
                        </div>
                        <div>
                            Total number of questions".$data_fetch['TOTAL NUMBER OF QUESTION']."
                        </div>
                      </div>
                      <div class='result_details'>Total obtained marks ....".$data_fetch['MARKS']."</div>
                </div>";
            }
            
        }
            
          
        
        ?>
    </main>

</body>

</html>
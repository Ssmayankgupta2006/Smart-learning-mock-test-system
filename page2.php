<?php 
  session_start();
  if(isset($_SESSION['auth'])&&($_SESSION['auth']=="DONE")){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />
    <link rel="icon" href="rightlogo (1).png" />
    <link rel="stylesheet" href="page2.css" />
    <!-- <script scr="page2hai.js"></script> -->
    <title>Mock test page 2</title>
</head>

<body>
    <header>
        <div class="box1">
            <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Mock test page 2</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanva>
                      <h5 class=" offcanvas-title" id="offcanvasNavbarLabel">
                            All web pages
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="page1.php">Mock test page 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="resistration.php">Registration</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin.php">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="CRESULT.PHP">Check Result</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="CRI.PHP">Check Registration</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="box2">
            <ul class="nav nav-tabs">
                <li class="nav-item myidclass" onclick="one()" type="li">
                    <a class="nav-link active" aria-current="page">Selected mock test</a>
                </li>
                <li class="nav-item myidclass" onclick="two()" type="li">
                    <a class="nav-link active" aria-current="page">Registration details</a>
                </li>
                <li class="nav-item myidclass" onclick="three()" type="li">
                    <a class="nav-link active" aria-current="page">students who attempt test and numbers</a>
                </li>
                <li class="nav-item myidclass" type="li">
                    <a class="nav-link active" href="print_resistration.php" aria-current="page">Download Registration
                        Information</a>
                </li>
                <li class="nav-item myidclass">
                    <a class="nav-link active" href="print_result.php" aria-current="page">Download Result
                        Information</a>
                </li>
            </ul>
        </div>
        <div class="box3"></div>
    </header>

    <main>
        <div class="main_box main_box1">
            <?php 
        if(isset($_SESSION['test_name'])&&isset($_SESSION['questions'])&&isset($_SESSION['testduration'])){
        require "server.php";
        $db=$_SESSION['test_name'];
        $dbr_s_i=$_SESSION['test_name']."_result_sub";
        $select_t = "SELECT * FROM `test name` WHERE `TEST NAME` = '$db';"; 
        $select_test = mysqli_query($conn, $select_t);  
        $select_test_fetch = mysqli_fetch_assoc($select_test);  
        $select_submition = "SELECT * FROM `".$dbr_s_i."`;"; 
        $select_submitionest = mysqli_query($conn, $select_submition);
        $select_submitionest_row=mysqli_num_rows($select_submitionest);
        echo "
          <div class='accordion m-2 mt-5' id='accordionExample '>
              <div class='accordion-item'>
                <p class='accordion-header p-3'>Test name : ".$_SESSION['test_name']."</p>
              </div>
              <div class='accordion-item'>
                <p class='accordion-header p-3'>Number of questions : ".$_SESSION['questions']."</p>
              </div>
              <div class='accordion-item'>
                <p class='accordion-header p-3'>Marks for Right answer : ".$_SESSION['right']."</p>
              </div>
              <div class='accordion-item'>
                <p class='accordion-header p-3'>Marks for Wrong answer : ".$_SESSION['wrong']."</p>
              </div>
              <div class='accordion-item'>
                <p class='accordion-header p-3'>Test duration : ".$_SESSION['testduration']." min only</p>
              </div>
              <div class='accordion-item'>
                <p class='accordion-header p-3'>Availibility : ".$select_test_fetch['ACCESS']."</p>
              </div>
              <div class='accordion-item'>
                <p class='accordion-header p-3'>Date of change in Availibility: ".$select_test_fetch['DATE']."</p>
              </div>
              <div class='accordion-item'>
                <p class='accordion-header p-3'>Number of students who all completed this mock : ".$select_submitionest_row."</p>
              </div>
          </div>
              ";
            }
            else{
              echo "not";
            }
          ?>
        </div>
        <div class="main_box main_box2" id="secondcol">
            <?php
      if(isset($_SESSION['test_name'])&&isset($_SESSION['questions'])&&isset($_SESSION['testduration'])){
        echo "
            <form method='post' action='page2.php' class='mt-4 m-2'>
            <div>
            <span for='formFileLg' class='form-label'>Choose section name</span>
            <select name='section' class='form-control'>
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
              <input type='submit' name='form40form' value='submit' class='form-control mt-2' placeholder='Server' aria-label='Server'>
            </div>
            ";
        if(($_SERVER['REQUEST_METHOD']=="POST")&&(isset($_POST['form40form']))){
          $section=strtoupper($_POST['section']);
          $_SESSION['section_page2']=$section;
          echo "
             <script>
                 var data=document.querySelectorAll('.main_box');
                 data.forEach(function (items){
                     items.style.display='None';
                 });
                 document.querySelector('.main_box2').style.display='block';
             </script>
          ";
        } 
        if(isset($_SESSION['section_page2'])){
          $section=$_SESSION['section_page2'];
            $sl_num="SELECT * FROM `resistration` WHERE `SECTION NAME`='$section';";
            $sl_num_ex=mysqli_query($conn,$sl_num);
            echo "<div class='box6_container'>";
            echo "
              <style>
                  .box6_container {
                    margin:10px;
                    margin-top:40px;
                    height: 160px;
                    display: flex;
                    flex-wrap: wrap;
                    gap: 10px;
                    overflow-x: auto;
                  }
                  .box6_span {
                    flex: 300px;
                    height: 150px;
                    padding-left:7px;
                    background-color: whitesmoke;
                    border-radius:10px;
                    display: flex;
                    justify-content: center;
                    align-items: left;
                    flex-direction: column;
                    gap: 10px;
                  }
              </style>";
            while($sl_num_ftch=mysqli_fetch_assoc($sl_num_ex)){
            echo "
                <div class='box6_span'>
                  <span>Student name ...".$sl_num_ftch['STUDENT NAME']."</span>
                  <span>Tca number ...".$sl_num_ftch['STUDENT TCA NUMBER']."</span>
                  <span>Section name ...".$sl_num_ftch['SECTION NAME']."</span>
                  <span>Password<sup>***</sup> ...".$sl_num_ftch['PASSWORD']."</span>
                </div>
            ";
            }
        }
        echo "</div>";
      }
      ?>
        </div>
        <div class="main_box main_box3" id="thirdcol">
            <?php 
      if(isset($_SESSION['test_name'])&&isset($_SESSION['questions'])&&isset($_SESSION['testduration'])){
        echo "
            <form method='post' action='page2.php' class='mt-4'>
                <div class='m-2'>
                <span for='formFileLg' class='form-label'>Choose section name</span>
                <select name='sectiontwo' class='form-control'>
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
                  <input type='submit' name='papamammiji' value='submit' class='form-control mt-2' placeholder='Server' aria-label='Server'>
                </div>
            ";
        if(($_SERVER['REQUEST_METHOD']=="POST")&&(isset($_POST['papamammiji']))){
          $section_two=strtoupper($_POST['sectiontwo']);
          $_SESSION['section_page2two']=$section_two;
          echo "
          <script>
          var data=document.querySelectorAll('.main_box');
          data.forEach(function (items){
            items.style.display='None';
            });
            document.querySelector('.main_box3').style.display='block';
            </script>
            ";
          } 
          if(isset($_SESSION['section_page2two'])){
            $section_two=$_SESSION['section_page2two'];
            $db=$_SESSION['test_name'];
            $sl_num_box3_hai="SELECT * FROM `".$db."_result_sub`;";
            $sl_num_box3_hai_ex=mysqli_query($conn,$sl_num_box3_hai);
            echo "<div class='box6_containertwo'>";
            echo "
            <style>
                  .box6_containertwo {
                    margin:10px;
                    margin-top:60px;
                    height: max-content;
                    display: flex;
                    flex-wrap: wrap;
                    gap: 10px;
                  }
                  .box6_spantwo {
                    flex: 300px;
                    height: 300px;
                    padding-left:7px;
                    background-color: whitesmoke;
                    border-radius:10px;
                    display: flex;
                    justify-content: center;
                    align-items: left;
                    flex-direction: column;
                    gap: 10px;
                  }
              </style>";
            while($sl_num_box3_hai_ftch=mysqli_fetch_assoc($sl_num_box3_hai_ex)){
            echo "
                <div class='box6_spantwo'>
                  <span>Student name ...".$sl_num_box3_hai_ftch['STUDENT NAME']."</span>
                  <span>Tca number ...".$sl_num_box3_hai_ftch['TCA']."</span>
                  <span>Section name ...".$sl_num_box3_hai_ftch['SECTION NAME']."</span>
                  <span>Total Time right answers ...".$sl_num_box3_hai_ftch['RIGHT ANSWER']."</span>
                  <span>Total Time wrong answers ...".$sl_num_box3_hai_ftch['WRONG ANSWER']."</span>
                  <span>Total Time questions ...".$sl_num_box3_hai_ftch['TIME OUT']."</span>
                  <span>Total number of questions ...".$sl_num_box3_hai_ftch['TOTAL NUMBER OF QUESTION']."</span>
                  <span>Total marks ...".$sl_num_box3_hai_ftch['MARKS']."</span>
                </div>
            ";
            }
        }
        echo "</div>";
        }
      ?>
        </div>
        <?php
    }
    else{
        echo "
        <script>
            document.location.href='admin_autho.php';
        </script>";
    }
    
?>

    </main>
    <footer></footer>
    <script src="page2.js"></script>
</body>

</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Resistration.css" />
    <link rel="icon" href="rightlogo (1).png"/>
    <title>Resistration</title>
  </head>
  <body>
    <header>

      <div class="con">
        <img src="vecteezy_white-clipboard-task-management-todo-check-list-efficient_9315300.png" alt="">
      </div>
    </header>
    <main>
     
      <div class="container_for_resistration">
        <form action="Resistration.php" method="post" id="formhai">
          <div class="div_two">
            <span>Enter your name </span>
            <input type="text" autocomplete="Name" required name="name" placeholder="Enter your name" />
          </div>
          <div class="div_two">
            <span>Tca number </span>
            <input type="text" autocomplete="TCA number" required name="tca" placeholder="Tca number" />
          </div>
          <div class="div_two">
            <span>Enter your password </span>
            <input type="password" autocomplete="Password" required name="pass" placeholder="your password" />
            <span>Do not forget to include special letters<sup>***</sup></span>
          </div>
          <div class="div_two">
            <span>E-mail</span>
            <input type="email" autocomplete="E-mail" name="email" placeholder="Email-id" />
          </div>
          <div class="div_two">
            <span>Section name</span>
            <select name="section" id="">
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
          </div>
          <div class="div_two">
          Welcome! Before going to the login page, you need to register. Please make sure you are registered here. This is a registration page that collects your information, so please ensure you are providing the correct information.
          </div>

          <div class="div_two_botton">
            <input type="submit" class="onehaiji000" name="submit_button" value="Register" />
            <a href="index.php" class="onehaiji"><div>Home</div></a>
            <a href="login.php" class="onehaiji onehaiji22"> <div id="onehaiji244">Login</div></a>
          </div>
          
        </form>
      </div>
    </main>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
      if(isset($_POST['submit_button'])){
        require "server.php";
        $username=strtoupper($_POST['name']);
        $tca=strtoupper($_POST['tca']);
        $section=strtoupper($_POST['section']);
        $password=$_POST['pass'];
        $email=($_POST['email']);


        $insert_data="INSERT INTO `resistration` (`STUDENT NAME`, `STUDENT TCA NUMBER`, `SECTION NAME`, `PASSWORD`) VALUES ('$username','$tca','$section','$password')";

        $data_select="SELECT * FROM `resistration`";
        $data_select_ex=mysqli_query($conn,$data_select);
        $data_fetch=mysqli_fetch_assoc($data_select_ex);
        $data_select_rows=mysqli_num_rows($data_select_ex);
        $var=0;
        
          while($var<$data_select_rows){
            if(($data_fetch['STUDENT TCA NUMBER']==$tca)&&($data_fetch['PASSWORD']==$password)){
              $massege="You have already finished your Registration.";
              $data_find=true;
              break;
            }
            else if(($data_fetch['STUDENT TCA NUMBER']==$tca)){
              $massege="You are registered with this TCA number. Please ensure that the TCA number provided is correct";
              $data_find=true;
              break;
            }
            else if(($data_fetch['PASSWORD']==$password)){
              $massege="Unique password is essential for keeping your accounts secure. so please enter unique password.";
              $data_find=true;
              break;
            }
            else{
              $data_find=false;
            }
            $data_fetch=mysqli_fetch_assoc($data_select_ex);
            $var++;
          }
          if($data_find==false){
            $insert_ex=mysqli_query($conn,$insert_data);
            $transfer=true;
            echo " <div class='div_two_botton_hai'>
              Registration Successfully Done.
            </div>";
            $transfer=true;
            echo "
              <script>
               document.querySelector('.onehaiji22').style.backgroundColor='red';
               document.querySelector('.onehaiji000').style.backgroundColor='whitesmoke';
               document.querySelector('.onehaiji000').style.color='black';
               document.querySelector('.onehaiji000').style.border='None';
               document.querySelector('.onehaiji22').style.borderRadius='8px';
               document.querySelector('#onehaiji244').style.color='white';

              </script>
            ";

          }
          else if($data_find==true){
            echo " <div class='div_two_botton_hai'>
              ".$massege."
            </div>";
          echo "
          <script>
           document.querySelector('.onehaiji22').style.backgroundColor='red';
           document.querySelector('.onehaiji000').style.backgroundColor='whitesmoke';
           document.querySelector('.onehaiji000').style.color='black';
           document.querySelector('.onehaiji000').style.border='None';
           document.querySelector('.onehaiji22').style.borderRadius='8px';
           document.querySelector('#onehaiji244').style.color='white';
          </script>
          ";
          }
      }
    }
    ?>
    <?php
     if($_SERVER['REQUEST_METHOD']=="POST"){
      if(isset($_POST['submit_button'])){
    global $data_find;
    global $username;
    global $tca;
    global $section;
    global $password;
    global $email;
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['tca']=$tca;  
    $_SESSION['section']=$section;  
    $_SESSION['email']=$email;  
    $_SESSION['attempts']="Notfirstattempt";
    $_SESSION['submit_status']="Notsubmitted";
   }
  }
  if((isset($transfer))&&($transfer)){
    echo "<script>window.location.href = 'login.php';</script>";
  }
?>
  </body>
</html>

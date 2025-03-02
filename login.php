<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Beiruti:wght@200..900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css" />
    <title>Login CTLD</title>
  </head>
  <body>
<main>
    <div class="container_initial container_initial1">
      <img src="vecteezy_3d-illustration-icon-of-purple-working-document-file-for-ui_25018623.png" alt="">
      <?php
      session_start();
      if((isset($_SESSION['username']))&&(isset($_SESSION['tca']))&&(isset($_SESSION['section']))&&(isset($_SESSION['password']))){
        $username=$_SESSION['username'];
        $tca=$_SESSION['tca'];
        $section=$_SESSION['section'];
        $pass=$_SESSION['password'];
      }
      ?>
    </div>
   
  <div class="container_initial container_initial2">
    <form action="login.php" method="post" id="mainhai">
      <span>
        <div>Enter your name</div>
        <?php
        global $username;
        if(isset($username)){
        echo "<input type='text' name='username' placeholder='Enter your name' value='$username'/>";
        }
        else{
        echo "<input type='text' autocomplete='Name' name='username' placeholder='Enter your name'/>";
        }
        ?>
      </span>
      <span>
        <?php
        global $tca;
        echo "<div>Enter your TCA number</div>";
        if(isset($tca)){
        echo "<input type='text' name='tca' placeholder='Enter your TCA number' value='$tca'/>";
        }
        else{
        echo "<input type='text' autocomplete='TCA number' name='tca' placeholder='Enter your TCA number'/>";
        }
        ?>
      </span>
      <span>
        <?php
        global $pass;
        echo "<div>Enter your password</div>";
        if(isset($pass)){
        echo "<input type='password' autocomplete='Password' name='password' placeholder='Enter your password number' value='$pass'/>";
        }
        else{
        echo "<input type='password' autocomplete='Password' name='password' placeholder='Enter your password number'/>";
        }
        ?>
      </span>
      <span>
        <?php
        global $section;
        echo "<div>Choose your section</div>";
        if(isset($section)){
        echo "<select name='section' value='$section'>
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
        ";
        }
        else{
        echo "<select name='section'>
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
        ";
        }
        ?>            
      </span>
      <span>
        <?php
        require "server.php";
        $test_op="SELECT * FROM `test name`";
        $test_op_ex=mysqli_query($conn,$test_op);
        echo "<div>Choose your test </div>";
        echo "<select name='database_use'>";
        while($test_op_ex_fetch=mysqli_fetch_assoc($test_op_ex)){
          $db_hai=$test_op_ex_fetch['TEST NAME'];
          echo "<option value='".$db_hai."'>".$db_hai."</option>";
        }
        echo "</select>";
        ?>
      </span>
      <span id="submit" class="changebyjs">
        <input id="submitbutton" type="submit" value="Login" name="submit_button"/>
      </span>
    </form>
  </div>

    <div class="container_initial container_initial3">
      <span>
      Before accessing the login page, you need to complete the registration process. Ensure you are registered first. This login page requires you to input details that match the information you provided during registration. Please make sure you provide accurate and consistent information.
      </span>
      <span id="submithai">
        <a class="first" href="index.php">
        <div>Home</div>
        </a>
        <a class="first" href="Resistration.php">
        <div>Registration</div>
        </a>
      </span>
    </div>
</div>

<?php
if(($_SERVER['REQUEST_METHOD']=="POST")&&(isset($_POST['submit_button']))){
  if((isset($_SESSION['username']))&&(isset($_SESSION['tca']))&&(isset($_SESSION['section']))){
      $username_hai=strtoupper($_SESSION['username']);
      $password=$_SESSION['password'];
      $tca_hai=strtoupper($_SESSION['tca']);
      $section=strtoupper($_SESSION['section']);
      $database_use=$_POST['database_use'];
      $_SESSION['database_use']=$database_use;
  }
  else{
      $username_hai=strtoupper($_POST['username']);
      $password=$_POST['password'];
      $tca_hai=strtoupper($_POST['tca']);
      $database_use=$_POST['database_use'];
      $resisgtration_verification="SELECT * FROM `resistration` where `STUDENT TCA NUMBER`='$tca_hai' and `PASSWORD`='$password';";
      $resisgtration_verification_ex=mysqli_query($conn,$resisgtration_verification);
      $resisgtration_verification_fetch=mysqli_fetch_assoc($resisgtration_verification_ex);
      if($resisgtration_verification_fetch){
        $section=$resisgtration_verification_fetch['SECTION NAME'];
        $_SESSION['database_use']=$database_use;
      }
  }
  $db_r_s=$_SESSION['database_use']."_result_sub";
  if(($username_hai!=null)&&($tca_hai!=null)&&($password!=null)){
      $registration="SELECT * FROM `resistration`;";
      $registration_ex=mysqli_query($conn,$registration);
      $registration_match=false;
      while($registration_fetch=mysqli_fetch_assoc($registration_ex)){
        if(($password===$registration_fetch['PASSWORD'])&&($tca_hai==$registration_fetch['STUDENT TCA NUMBER'])){
          $registration_match=true;
          break;
        }
        else{
          $registration_match=false;
        }
      }
      $fresher="SELECT `TCA`, `STUDENT NAME`, `DATE`, `SECTION NAME`, `RIGHT ANSWER`, `WRONG ANSWER`, `TIME OUT`, `TOTAL NUMBER OF QUESTION`, `MARKS` FROM `".$db_r_s."`;";
      $fresher_ex=mysqli_query($conn,$fresher);
      $fresher_check=false;
      while($fresher_fetch=mysqli_fetch_assoc($fresher_ex)){
          if(($fresher_fetch['TCA']==$tca_hai)&&($fresher_fetch['STUDENT NAME']==$username_hai)){
            $fresher_check=true;
            break;
          }
          else{
            $fresher_check=false;
          }
      }

      if(($registration_match)&&(!($fresher_check))){
      $dbt=$_SESSION['database_use']."_test";
      $db=$_SESSION['database_use'];
      $dbv=$_SESSION['database_use']."_verification";
      $verification="SELECT * FROM `".$dbv."`";
      $verification_ex=mysqli_query($conn,$verification);
      $verification_match=false;
        while($verification_fetch=mysqli_fetch_assoc($verification_ex)){
          if($tca_hai==$verification_fetch['STUDENT TCA NUMBER']){
            $verification_match=true;
            break;
          }
          else{
            $verification_match=false;
          }

        }
        if($verification_match){
          $test_verification="SELECT * FROM `test name` where `TEST NAME`='".$db."'";
          $test_verification_ex=mysqli_query($conn,$test_verification);
          $test_verification_fetch=mysqli_fetch_assoc($test_verification_ex);
          if($test_verification_fetch['ACCESS']=="OPEN"){
            $_SESSION['password']=$password;
            $_SESSION['login']="true";
            $_SESSION['username']=$username_hai;
            $_SESSION['database_question']=$test_verification_fetch['TEST QUESTION'];
            $_SESSION['database_time']=$test_verification_fetch['TEST TIME'];
            $_SESSION['tca']=$tca_hai;
            $_SESSION['new_section']=$section;
            $_SESSION['attempts']="Notfirstattempt";
            $_SESSION['submit_status']="Notsubmittedhai";
            $_SESSION['fresher']=true;
            echo "<div id='fixed'><span id='fixedspan'>1</span></div>";
            echo "<script src='login2.js'></script>";
          }
          else if($test_verification_fetch['ACCESS']=="UPCOMING"){
            echo "<div class='container_for_random colorB'>
              <span>Kindly note that the upcoming mock test is set to occur in the near future.</span>
              <span>Upcoming date is ".$test_verification_fetch['DATE']."</span>
            </div>";
            $_SESSION['fresher']=false;
          }
          else if($test_verification_fetch['ACCESS']=="COMPLETED"){
            echo "<div class='container_for_random colorR'>
              <span>The time limit for the mock test has been reached, and it's no longer available.</span>
              <span>Closed date ".$test_verification_fetch['DATE']."</span>
            </div>";
            $_SESSION['fresher']=false;
          }

        }
        else{
          echo "<div class='container_for_random colorR'>
            <span>Faculty permission is needed to take the mock test, and you do not have it at this time.</span>
          </div>";
          $_SESSION['fresher']=false;
        }
      }
      else if(($fresher_check)){
        echo "<div class='container_for_random colorR'>
          <span>Single Attempt Policy : Our policy allows only one submission per mock. Once you have submitted your mock, no further submissions will be accepted. Please ensure that your submission is completed for ".$_SESSION['database_use']." mock.
          </span>
        </div>";
        $_SESSION['fresher']=false;
      }
      else{
        echo "<div class='container_for_random colorR'>
          <span>Please ensure your password and TCA number are correct; we are verifying both.</span>
        </div>";
        $_SESSION['fresher']=false;
      }

    
  }
  else{
    echo "<div class='container_for_random colorB'>
      <span>All fields must be filled out.</span>
    </div>";
  }
}
?>
 
</main>
</body>
</html>

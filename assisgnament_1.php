<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@400..800&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assignment_1.css">
    <title>Details about Mock test</title>
  </head>
  <body>
    <header>
    <div class="container_for_warning">
      <?php
      require "server.php";
      session_start();
      $_SESSION['attempts']="Notfirstattempt";
      $_SESSION['submit_status']="Notsubmitted";
      if(isset($_SESSION['database_use'])){
      $db=$_SESSION['database_use'];
      $data="SELECT * FROM `".$db."_test`";
      $data_ex=mysqli_query($conn,$data);
      $data_row=mysqli_num_rows($data_ex);
      $test="SELECT * FROM `test name` where `TEST NAME`='$db';";
      $test_ex=mysqli_query($conn,$test);
      $test_fetch=mysqli_fetch_assoc($test_ex);
      $test_name=$_SESSION['database_question'];
      $test_time=$_SESSION['database_time'];
      $test_right=$test_fetch['RIGHT MARKS'];
      $test_wrong=$test_fetch['WRONG MARKS'];
      if($data_row>0){
      $data_fetch=mysqli_fetch_assoc($data_ex);
        echo "
         <div>
      <span>
        <span id='special'>
          <strong>Number of Questions:**</strong> This test contains ".$test_name." questions, covering a variety of topics to thoroughly assess your
          skills.
        </span>
      </span>
      
      <span>
        <span id='special'>
          <strong>Overall Time:</strong> The entire test is designed to be
          completed within ".$test_time." minutes, providing a realistic and efficient
          practice experience.
        </span>
      </span>
      <span>
        <span id='special'>
          <strong>Marking :**</strong> This test contains
          Positive and negative marking both for Right Answer + ".$test_right." and Worng - ".$test_wrong." will be add in your final result calculation.
        </span>
      </span>
      <span>
        <span id='special'>
          <strong>Mock Tests:</strong> Take full-length mock tests designed to
          mirror real exam conditions. Boost your test-taking skills with these
          comprehensive simulations.
        </span>
      </span>

      <span>
        <span id='special'>
          <strong>Performance Analytics:</strong> Gain valuable insights with
          in-depth performance analytics. Track your progress, analyze question
          patterns, and pinpoint areas for improvement.
        </span>
      </span>

      <span>
        <span id='special'>
          <strong>Auto-Submission:</strong> No need to worry about timing out;
          your test will be automatically submitted once the allotted time is
          up.
        </span>
      </span>

      <span>
        <span id='special'>
          <strong>Post-Submission Analysis:</strong> Take advantage of one
          additional review session to analyze your answers and refine your
          strategies.
        </span>
      </span>

      <span>
        <span id='special'>
          <strong>Single Attempt Policy:</strong> Practice under true exam
          conditions with only one attempt per test, promoting effective
          preparation and performance.
        </span>
      </span>


     
    </div>
        ";
        echo "
       <a href='aa2hai.php'id='button'>
        <span>Start Now</span>
        </a>
     ";
      }
        else{
          echo "No data founded";
        }
      }
      else{
        echo "<a href='login.php'>Choose your test</a>";
      }
        ?>
       
      </div>
    </header>
  </body>
</html>

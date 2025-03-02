<?php
    session_start();
    if (isset($_SESSION['auth']) && ($_SESSION['auth'] == "DONE")) {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <script src="page1.js"></script>
    <link rel="icon" href="rightlogo (1).png" />
    <link rel="stylesheet" href="page1.css">
    <title>Mock test page 1</title>
</head>

<body>
    <header>
        <div class="box1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, accusamus.
        </div>
        <div class="box2 ">
            <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Mock test page 1</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                All web pages
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="page2.php">Mock test page 2</a>
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
                                    <a class="nav-link" href="page2.php#thirdcol">Check Result</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="page2.php#secondcol">Check Registration</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="box3">
            <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation" onclick="main_one()">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
                        role="tab" aria-controls="home-tab-pane" aria-selected="true">Create test</button>
                </li>
                <li class="nav-item" role="presentation" onclick="main_one_after()">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
                        role="tab" aria-controls="home-tab-pane" aria-selected="true">Choose test name</button>
                </li>
                <li class="nav-item" role="presentation" onclick="main_two()">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
                        role="tab" aria-controls="profile-tab-pane" aria-selected="false">New question with img</button>
                </li>
                <li class="nav-item" role="presentation" onclick="main_two_after()">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
                        role="tab" aria-controls="profile-tab-pane" aria-selected="false">New question only</button>
                </li>
                <li class="nav-item" role="presentation" onclick="main_three()">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button"
                        role="tab" aria-controls="contact-tab-pane" aria-selected="false">Select from universal
                        set</button>
                </li>
                <li class="nav-item" role="presentation" onclick="main_four()">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button"
                        role="tab" aria-controls="contact-tab-pane" aria-selected="false">Generated Mock test</button>
                </li>
                <li class="nav-item" role="presentation" onclick="main_five()">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button"
                        role="tab" aria-controls="contact-tab-pane" aria-selected="false">Verification of
                        students</button>
                </li>
                <li class="nav-item" role="presentation" onclick="main_six_hai()">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button"
                        role="tab" aria-controls="contact-tab-pane" aria-selected="false">Final Step</button>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <div class="main_box1 main_box">
            <form class="row g-3" method="post" action="page1.php">
                <div class="col-auto">
                    <details style='padding: 8px; color:blue;'>
                        Ensure there are no spaces among any words or letters, and make sure test name is in continuous
                        format like ( future_by_aptitude ).
                    </details>
                    <span style='padding: 8px;'>Do not include space among letters<sup>***</sup></span>

                    <input required type="text" class="form-control" placeholder="Enter Test Name " name="test">
                </div>
                <div class="col-auto">
                    <details style='padding: 8px; color:blue;'>
                        Enter the total number of questions for every student, for instance, 100 questions. Then,
                        determine how many questions each student should receive, such as 20 questions. Finally,
                        configure the system to shuffle and randomly select the specified number of questions from the
                        total pool for each student. This ensures that each student gets a unique set of questions in a
                        shuffled order.
                    </details>
                    <span style='padding: 8px;'>Enter Number of Questions </span>
                    <input required type="text" class="form-control" placeholder="Enter Number of Questions"
                        name="questions">
                </div>
                <div class="col-auto">
                    <span style='padding: 8px;'>Enter Test Duration (mintus)<sup>***</sup></span>
                    <input required type="text" class="form-control" placeholder="Enter Test Duration (mintus) "
                        name="testduration">
                </div>
                <div class="col-auto">
                    <span style='padding: 8px;'>Enter Marks for Right answer<sup>***</sup></span>
                    <input required type="text" class="form-control" placeholder="Enter Marks for Right answer"
                        name="rightm">
                </div>
                <div class="col-auto">
                    <span style='padding: 8px;'>Enter Marks for wrong answer<sup>***</sup></span>
                    <input required type="text" class="form-control"
                        placeholder="Enter Marks for Wrong answer do not include negative sign" name="wrongm">
                </div>
                <div class="col-auto">
                    <details style='padding: 8px; color:blue;'>
                        Set the date and time for the mock test. The mock test schedule will be displayed on the home
                        page after logging in. The login page will also show if a mock test is upcoming,open,completed
                        along with its date and time.
                    </details>
                    <span style='padding: 8px;'>Set Upcoming date and time for mock </span>
                    <input required type="datetime-local" class="form-control" name="dateandtime">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3" name="form1" value="Submit Information">Submit
                        Information</button>
                </div>
            </form>
            <?php
                require "server.php";
                    if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['form1'])) {
                        $test_name                = $_POST['test'];
                        $questions                = $_POST['questions'];
                        $testduration             = $_POST['testduration'];
                        $dateandtime              = $_POST['dateandtime'];
                        $right                    = $_POST['rightm'];
                        $wrong                    = $_POST['wrongm'];
                        $_SESSION['test_name']    = $test_name;
                        $_SESSION['questions']    = $questions;
                        $_SESSION['testduration'] = $testduration;
                        $_SESSION['right']        = $right;
                        $_SESSION['wrong']        = $wrong;
                        $check                    = "SELECT * FROM `test name`";
                        $check_ex                 = mysqli_query($conn, $check);
                        $check_ex_two             = mysqli_query($conn, $check);
                        $check_row                = mysqli_num_rows($check_ex);
                        $check_status             = false;
                        $close                    = "UPCOMING";
                        $date_hai                 = date('Y-m-d');
                        $check_status             = false;
                        while ($check_fetch = mysqli_fetch_assoc($check_ex)) {
                            if ($test_name === $check_fetch['TEST NAME']) {
                                $check_status = true;
                                break;
                            }
                        }

                        if ($check_status) {
                            echo "<div class='alert' role='alert'> " . $test_name . " has been created already. </div>";
                        } else {
                            $test_insert    = "INSERT INTO `test name` (`TEST NAME`, `TEST QUESTION`, `TEST TIME`,`ACCESS`,`DATE`,`RIGHT MARKS`,`WRONG MARKS`) VALUES (?, ?, ?,?,?,?,?)";
                            $test_insert_ex = $conn->prepare($test_insert);
                            $test_insert_ex->bind_param("sssssss", $test_name, $questions, $testduration, $close, $dateandtime, $right, $wrong);
                            echo "
                            <script>
                                var data=document.querySelectorAll('.main_box');
                                data.forEach(function (items){
                                    items.style.display='None';
                                });
                                document.querySelector('.main_box1').style.display='block';
                            </script>
                        ";

                            if ($test_insert_ex->execute()) {
                                echo "<div class='alert' role='alert'> {$test_name} has been created successfully. </div>";
                                {
                                    $db   = $database;
                                    $test = "CREATE TABLE `" . $db . "`.`" . $test_name . "_test` (
                                `QUESTION_IMG`  LONGTEXT NOT NULL,
                                `QUESTION` TEXT NOT NULL,
                                `OPTION_1` TEXT NOT NULL,
                                `OPTION_2` TEXT NOT NULL,
                                `OPTION_3` TEXT NOT NULL,
                                `OPTION_4` TEXT NOT NULL,
                                `OPTION_5` TEXT NOT NULL
                                );
                                ";
                                    $test_ex = mysqli_query($conn, $test);

                                    $create_result = "CREATE TABLE IF NOT EXISTS `" . $db . "`.`" . $test_name . "_result` (
                                `QUESTION_IMG`  LONGTEXT NOT NULL,
                                `QUESTION` TEXT NOT NULL,
                                `ANSWER` TEXT NOT NULL,
                                `RIGHT ANSWER` TEXT NOT NULL,
                                `TCA` TEXT NOT NULL,
                                `DATE` TEXT NOT NULL,
                                `SECTION NAME` TEXT NOT NULL
                                );";
                                    $create_result_ex = mysqli_query($conn, $create_result);

                                    // result_submmition table creation here
                                    $create_result_submmition = " CREATE TABLE IF NOT EXISTS `" . $db . "`.`" . $test_name . "_result_sub` (
                                `TCA` TEXT NOT NULL,
                                `STUDENT NAME` TEXT NOT NULL,
                                `DATE` TEXT NOT NULL,
                                `SECTION NAME` TEXT NOT NULL,
                                `RIGHT ANSWER` TEXT NOT NULL,
                                `WRONG ANSWER` TEXT NOT NULL,
                                `TIME OUT` TEXT NOT NULL,
                                `TOTAL NUMBER OF QUESTION` TEXT NOT NULL,
                                `MARKS` TEXT NOT NULL
                                )
                                ";
                                    $create_result_submmition_ex = mysqli_query($conn, $create_result_submmition);

                                    $create_verification = "CREATE TABLE IF NOT EXISTS `" . $db . "`.`" . $test_name . "_verification` (
                                `STUDENT NAME` TEXT NOT NULL,
                                `STUDENT TCA NUMBER` TEXT NOT NULL,
                                `SECTION NAME` TEXT NOT NULL
                                )";
                                    $create_verification_ex = mysqli_query($conn, $create_verification);
                                }
                            }
                        }
                    }
                ?>
        </div>

        <div class="main_box1_2 main_box">
            <details style='margin:8px; color:blue;' class='mt-4'>
                This platform is designed to create multiple tests. You have to choose one of the mock test, and all the
                remaining work will be done by using that test name automatically, such as: Questions with images ,Only
                questions ,Select from universal set ,Verification ,Final step And page 2 features also.
            </details>
            <form class="row g-3" method="post" action="page1.php">
                <div class="col-auto">
                    <select name="testname" id="selectforselecte">
                        <?php
                            $select    = "SELECT * FROM `test name`";
                                $select_ex = mysqli_query($conn, $select);
                                while ($select_fetch = mysqli_fetch_assoc($select_ex)) {
                                    $option = $select_fetch['TEST NAME'];
                                    echo "<option value='$option'>" . $option . "</option>";
                                }
                            ?>
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3" name="form42" value="Submit Information">Submit
                        Information</button>
                </div>
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['form42'])) {
                        $test_name             = $_POST['testname'];
                        $_SESSION['test_name'] = $test_name;

                        $select_details           = "SELECT * FROM `test name` where `TEST NAME`='$test_name'";
                        $select_details_ex        = mysqli_query($conn, $select_details);
                        $select_details_fetch     = mysqli_fetch_assoc($select_details_ex);
                        $_SESSION['questions']    = $select_details_fetch['TEST QUESTION'];
                        $_SESSION['testduration'] = $select_details_fetch['TEST TIME'];
                        $_SESSION['right']        = $select_details_fetch['RIGHT MARKS'];
                        $_SESSION['wrong']        = $select_details_fetch['WRONG MARKS'];
                        echo "
                    <script>
                        var data=document.querySelectorAll('.main_box');
                        data.forEach(function (items){
                            items.style.display='None';
                        });
                        document.querySelector('.main_box1_2').style.display='block';
                    </script>";
                    }
                    if ((isset($_SESSION['test_name'])) && (isset($_SESSION['questions'])) && (isset($_SESSION['testduration']))) {
                        $t_name     = $_SESSION['test_name'];
                        $t_question = $_SESSION['questions'];
                        $t_time     = $_SESSION['testduration'];
                        echo "
                        <div class='styledetails'>
                                <div class=''>Test name ........." . $t_name . "</div>
                                <div class=''>Number of questions allowed for per user ........." . $t_question . "</div>
                                <div class=''>Time duration ........." . $t_time . "</div>
                                <div class=''>Marks for right answer ........." . $_SESSION['right'] . "</div>
                                <div class=''>Marks for wrong answer ........." . $_SESSION['wrong'] . "</div>
                        </div>
                        ";
                    } else {
                        echo "
                        <div class='styledetails'>
                                <div class=''>Test name -- Not set</div>
                                <div class=''>Number of questions -- Not set</div>
                                <div class=''>Time duration -- Not set</div>
                        </div>";
                    }
                ?>
        </div>

        <div class="main_box2 main_box">
            <form action="page1.php" class="row g-1" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <span for="formFile" class="form-label">Question Image</span>
                    <input required class="form-control" type="file" name="questionImg">
                </div>
                <div class="col-auto">
                    <span class="visually-hidden">Enter Question</span>
                    <input required type="text" class="form-control" name="question" placeholder="Enter Question">
                </div>
                <div class="col-auto">
                    <span class="visually-hidden">Option 1</span>
                    <input required type="text" class="form-control" name="option_1" placeholder="Option 1">
                </div>
                <div class="col-auto">
                    <span class="visually-hidden">Option 2</span>
                    <input required type="text" class="form-control" name="option_2" placeholder="Option 2">
                </div>
                <div class="col-auto">
                    <span class="visually-hidden">Option 3</span>
                    <input required type="text" class="form-control" name="option_3" placeholder="Option 3">
                </div>
                <div class="col-auto">
                    <span class="visually-hidden">Option 4</span>
                    <input required type="text" class="form-control" name="option_4" placeholder="Option 4">
                </div>
                <div class="col-auto">
                    <span class="visually-hidden">Right option</span>
                    <input required type="text" class="form-control" name="option_5" placeholder="Right option">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3" name="form2">Submit Question</button>
                </div>
            </form>
            <?php
                require "server.php";
                    if (isset($_SESSION['test_name'])) {
                        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['form2'])) {
                            $actual_question = $_POST['question'];
                            $option_1        = $_POST['option_1'];
                            $option_2        = $_POST['option_2'];
                            $option_3        = $_POST['option_3'];
                            $option_4        = $_POST['option_4'];
                            $option_5        = $_POST['option_5'];
                            $db_a            = $_SESSION['test_name'];
                            $db              = $db_a . "_test";
                            $image_type      = $_FILES['questionImg']['type'];
                            $image_data      = file_get_contents($_FILES['questionImg']['tmp_name']);
                            $image_data      = base64_encode($image_data);

                            $insert = $conn->prepare("INSERT INTO `" . $db . "` (`QUESTION_IMG`,`QUESTION`, `OPTION_1`, `OPTION_2`, `OPTION_3`, `OPTION_4`, `OPTION_5`) VALUES (?, ?,  ?, ?, ?, ?, ?)");
                            $insert->bind_param("sssssss", $image_data, $actual_question, $option_1, $option_2, $option_3, $option_4, $option_5);

                            $universal_set = $conn->prepare("INSERT INTO `universal set` (`QUESTION_IMG`,`QUESTION`, `OPTION_1`, `OPTION_2`, `OPTION_3`, `OPTION_4`, `OPTION_5`)  VALUES (?,?,?,?,?,?,?)");
                            $universal_set->bind_param("sssssss", $image_data, $actual_question, $option_1, $option_2, $option_3, $option_4, $option_5);
                            $universal_set->execute();

                            if ($insert->execute()) {
                                echo "<div class='alert alert-success' role='alert'>
                        Question has been added successfully.
                        </div>";
                            } else {
                                echo "<div class='alert alert-danger' role='alert'>
                        Error adding question: " . $insert->error . "
                        </div>";
                            }
                            echo "
                    <script>
                        var data=document.querySelectorAll('.main_box');
                        data.forEach(function (items){
                            items.style.display='None';
                        });
                        document.querySelector('.main_box2').style.display='block';
                    </script>";
                        }
                    } else {
                        echo "<div class='alert alert-primary mt-5 dhaiflex' role='alert'>
                Please select test name Click above.
                </div>";
                    }
                ?>
        </div>

        <div class="main_box2_1 main_box">
            <form action="" class="row g-1" method="post" enctype="multipart/form-data">
                <div class="col-auto">
                    <span class="visually-hidden">Enter Question</span>
                    <input required type="text" class="form-control" name="question" placeholder="Enter Question">
                </div>
                <div class="col-auto">
                    <span class="visually-hidden">Option 1</span>
                    <input required type="text" class="form-control" name="option_1" placeholder="Option 1">
                </div>
                <div class="col-auto">
                    <span class="visually-hidden">Option 2</span>
                    <input required type="text" class="form-control" name="option_2" placeholder="Option 2">
                </div>
                <div class="col-auto">
                    <span class="visually-hidden">Option 3</span>
                    <input required type="text" class="form-control" name="option_3" placeholder="Option 3">
                </div>
                <div class="col-auto">
                    <span class="visually-hidden">Option 4</span>
                    <input required type="text" class="form-control" name="option_4" placeholder="Option 4">
                </div>
                <div class="col-auto">
                    <span class="visually-hidden">Right option</span>
                    <input required type="text" class="form-control" name="option_5" placeholder="Right option">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3" name="form256">Submit Question</button>
                </div>
            </form>
            <?php
                require "server.php";
                    if (isset($_SESSION['test_name'])) {
                        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['form256'])) {
                            $actual_question = $_POST['question'];
                            $option_1        = $_POST['option_1'];
                            $option_2        = $_POST['option_2'];
                            $option_3        = $_POST['option_3'];
                            $option_4        = $_POST['option_4'];
                            $option_5        = $_POST['option_5'];
                            $db_a            = $_SESSION['test_name'];
                            $db              = $db_a . "_test";

                            $insert = $conn->prepare("INSERT INTO `" . $db . "` (`QUESTION`, `OPTION_1`, `OPTION_2`, `OPTION_3`, `OPTION_4`, `OPTION_5`) VALUES (?, ?, ?, ?, ?, ?)");
                            $insert->bind_param("ssssss", $actual_question, $option_1, $option_2, $option_3, $option_4, $option_5);

                            $universal_set = $conn->prepare("INSERT INTO `universal set` (`QUESTION`, `OPTION_1`, `OPTION_2`, `OPTION_3`, `OPTION_4`, `OPTION_5`) VALUES (?,?,?,?,?,?)");
                            $universal_set->bind_param("ssssss", $actual_question, $option_1, $option_2, $option_3, $option_4, $option_5);
                            $universal_set->execute();

                            if ($insert->execute()) {
                                echo "<div class='alert alert-success' role='alert'>
                        Question has been added successfully.
                        </div>";
                            } else {
                                echo "<div class='alert alert-danger' role='alert'>
                        Error adding question: " . $insert->error . "
                        </div>";
                            }
                            echo "
                    <script>
                        var data=document.querySelectorAll('.main_box');
                        data.forEach(function (items){
                            items.style.display='None';
                        });
                        document.querySelector('.main_box2_1').style.display='block';
                    </script>";
                        }
                    } else {
                        echo "<div class='alert alert-primary mt-5 dhaiflex' role='alert'>
                Please select test name Click above.
                </div>";
                    }
                ?>
        </div>

        <div class="main_box3 main_box">
            <?php
                $i = 1;
                    if (isset($_SESSION['test_name'])) {
                        $dbt   = $_SESSION['test_name'] . "_test";
                        $sl    = "SELECT * FROM `universal set`;";
                        $sl_ex = mysqli_query($conn, $sl);
                        while ($sl_fetch = mysqli_fetch_assoc($sl_ex)) {
                            $sl_two    = "SELECT * FROM `" . $dbt . "`;";
                            $sl_two_ex = mysqli_query($conn, $sl_two);
                            $sl_match  = false;
                            while ($sl_two_fetch = mysqli_fetch_assoc($sl_two_ex)) {
                                if ($sl_two_fetch['QUESTION'] == $sl_fetch['QUESTION']) {
                                    $sl_match = true;
                                    break;
                                } else {
                                    $sl_match = false;
                                }
                            }
                            if (! ($sl_match)) {
                                $qesimg = $sl_fetch['QUESTION_IMG'];
                                $qes    = $sl_fetch['QUESTION'];
                                $op1    = $sl_fetch['OPTION_1'];
                                $op2    = $sl_fetch['OPTION_2'];
                                $op3    = $sl_fetch['OPTION_3'];
                                $op4    = $sl_fetch['OPTION_4'];
                                $op5    = $sl_fetch['OPTION_5'];
                                echo "
                            <style>
                                .container87 {

                                  height: max-content;
                                  display: flex;
                                  flex-wrap: wrap;
                                  gap: 10px;
                                }
                                .box_con87 {
                                  flex: 300px;
                                  padding: 10px;
                                  border: none;
                                }
                                .box_con87 div {
                                  margin-top: 6px;
                                }
                                .box_con87 div:nth-child(1) {
                                  font-size: 20px;
                                  color: blue;
                                }
                                .box_con87hai {
                                  display: flex;
                                  justify-content: center;
                                  align-items: center;
                                  height: 100%;
                                  width: 100%;
                                }
                                .box_con87 img {
                                  height: 300px;
                                  width: 100%;
                                  border: none;
                                }
                            </style>
                        ";

                                echo "
                            <form action='page1.php' method='post' enctype='multipart/form-data'>
                                <div class='container87'>
                                    <span class='box_con87'>
                                      <div>Question .. " . $qes . "</div>
                                      <div>Option 1 .. " . $op1 . "</div>
                                      <div>Option 2 .. " . $op2 . "</div>
                                      <div>Option 3 .. " . $op3 . "</div>
                                      <div>Option 4 .. " . $op4 . "</div>
                                      <div>Option 5 .. " . $op5 . "</div>
                                      <div>
                                        <table>
                                            <tr>
                                                <td><input type='submit' class='btn btn-primary forallselect' name='$i' value='Select'/></td>
                                                <td><input type='submit' class='btn btn-primary' name='dd" . $i . "dd' value='Delect'/></td>
                                            </tr>
                                        </table>
                                      </div>
                                    </span>";
                                echo "<span class='box_con87 box_con87hai'>";
                                if (! (empty($qesimg))) {
                                    echo "<img src='data:image/png;base64," . $qesimg . "' alt='Image' />";
                                }
                                echo "</span>";
                                echo "</div></form>";
                                $delete = "dd" . $i . "dd";
                                if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST[$i]))) {
                                    if (! empty($qesimg)) {
                                        $insert_haiji = $conn->prepare("INSERT INTO `" . $dbt . "` (`QUESTION_IMG`, `QUESTION`, `OPTION_1`, `OPTION_2`, `OPTION_3`, `OPTION_4`, `OPTION_5`) VALUES (?, ?, ?, ?, ?, ?, ?)");
                                        $insert_haiji->bind_param("sssssss", $qesimg, $qes, $op1, $op2, $op3, $op4, $op5);
                                        $insert_haiji->execute();
                                    } else {
                                        $insert_haihai = $conn->prepare("INSERT INTO `" . $dbt . "` (`QUESTION`, `OPTION_1`, `OPTION_2`, `OPTION_3`, `OPTION_4`, `OPTION_5`) VALUES (?, ?, ?, ?, ?, ?)");
                                        $insert_haihai->bind_param("ssssss", $qes, $op1, $op2, $op3, $op4, $op5);

                                        $universal_set_haihaihai = $conn->prepare("INSERT INTO `universal set` (`QUESTION`, `OPTION_1`, `OPTION_2`, `OPTION_3`, `OPTION_4`, `OPTION_5`) VALUES (?,?,?,?,?,?)");
                                        $universal_set_haihaihai->bind_param("ssssss", $qes, $op1, $op2, $op3, $op4, $op5);
                                        $universal_set_haihaihai->execute();
                                        $insert_haihai->execute();
                                    }
                                    echo "<script>
                                        var all = document.querySelectorAll('.main_box');
                                        all.forEach(function (items) {
                                          items.style.display = 'None';
                                        });
                                        document.querySelector('.main_box3').style.display = 'block';
                                </script>";
                                } else if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST[$delete]))) {
                                    $del    = "DELETE FROM `universal set` WHERE `QUESTION`='$qes'";
                                    $del_ex = mysqli_query($conn, $del);
                                    echo "<script>
                                    alert('" . $qes . "');
                                    location.reload();
                                </script>";
                                }
                                $i++;
                            }
                        }

                    } else {
                        echo "<div class='alert alert-primary mt-5 dhaiflex' role='alert'>
                    Please select test name Click above.
                    </div>";
                    }
                    // echo "Mayank gupta";
                ?>
        </div>
        </div>

        <div class="main_box4 main_box">
            <?php
                $j = 0;
                    if (isset($_SESSION['test_name'])) {
                        $db_ge    = $_SESSION['test_name'] . "_test";
                        $sl_ge    = "SELECT * FROM `" . $db_ge . "`";
                        $sl_ge_ex = mysqli_query($conn, $sl_ge);
                        while ($sl_ge_fetch = mysqli_fetch_assoc($sl_ge_ex)) {
                            $j++;
                            echo "
                            <style>
                                .container87 {
                                  height: max-content;
                                  display: flex;
                                  flex-wrap: wrap;
                                  gap: 10px;
                                  margin:20px 30px 20px 30px;
                                }
                                .box_con87 {
                                  flex: 300px;
                                  padding: 10px;
                                  border: none;
                                }
                                .box_con87 div {
                                  margin-top: 6px;
                                  padding-left:20px;
                                  color:blue;
                                }
                                .box_con87 div:nth-child(1) {
                                  font-size: 20px;
                                  color: green;
                                  padding-left:0px;

                                }
                                .box_con87hai {
                                  display: flex;
                                  justify-content: center;
                                  align-items: center;
                                  height: 100%;
                                  width: 100%;
                                }
                                .box_con87 img {
                                  height: 300px;
                                  width: 100%;
                                  border: none;
                                }
                            </style>
                        ";
                            echo "
                                <div class='container87'>
                                    <span class='box_con87'>
                                      <div>Question " . $j . ".. " . $sl_ge_fetch['QUESTION'] . "</div>
                                      <div>OPTION_1 .. " . $sl_ge_fetch['OPTION_1'] . "</div>
                                      <div>OPTION_2 .. " . $sl_ge_fetch['OPTION_2'] . "</div>
                                      <div>OPTION_3 .. " . $sl_ge_fetch['OPTION_3'] . "</div>
                                      <div>OPTION_4 .. " . $sl_ge_fetch['OPTION_4'] . "</div>
                                      <div>OPTION_5 .. " . $sl_ge_fetch['OPTION_5'] . "</div>
                                    </span>";
                            echo "<span class='box_con87 box_con87hai'>";
                            if (! (empty($sl_ge_fetch['QUESTION_IMG']))) {
                                echo "<img src='data:image/png;base64," . $sl_ge_fetch['QUESTION_IMG'] . "' alt='Image' />";
                            }
                            echo "</span>";
                            echo "</div>";
                        }

                    } else {
                        echo "<div class='alert alert-primary mt-5 dhaiflex' role='alert'>
                Please select test name Click above.
                </div>";
                    }
                ?>
        </div>

        <div class="main_box6 main_box">
            <?php
                if (isset($_SESSION['test_name'])) {
                        $db = $_SESSION['test_name'];
                        echo "<form action='page1.php' method='post' class='m-2'>";
                        echo "<div class='mb-3 mt-4'>
                        <span for='disabledSelect' class='form-label'>Set mock availibility <sup>***</sup></span>
                        <select class='form-select' name='availibity'>
                            <option>Select here</option>
                            <option value='OPEN'>OPEN</option>
                            <option value='COMPLETED'>COMPLETED</option>
                        </select>
                        </div>
                    ";
                        echo "<button type='submit' class='btn btn-primary' name='form_hanny'>Submit</button></form>";
                        if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['form_hanny']))) {
                            $access         = $_POST['availibity'];
                            $date_hai       = Date('Y-m-d');
                            $box6_access    = "UPDATE `test name` SET `ACCESS`='$access',`DATE`='$date_hai' where `TEST NAME`='$db';";
                            $box6_access_ex = mysqli_query($conn, $box6_access);
                        }

                        $dbt         = $_SESSION['test_name'] . "_test";
                        $db          = $_SESSION['test_name'];
                        $dbv         = $_SESSION['test_name'] . "_verification";
                        $dbr_s       = $_SESSION['test_name'] . "_result_sub";
                        $sl_num      = "SELECT `QUESTION` FROM `" . $dbt . "`";
                        $sl_num_ex   = mysqli_query($conn, $sl_num);
                        $sl_num_rows = mysqli_num_rows($sl_num_ex);

                        $box6_verifified     = "SELECT * FROM `" . $dbv . "`;";
                        $box6_verifified_ex  = mysqli_query($conn, $box6_verifified);
                        $box6_verifified_row = mysqli_num_rows($box6_verifified_ex);

                        $box6_entered_q        = "SELECT `QUESTION` FROM `" . $dbt . "`;";
                        $box6_entered_q_ex     = mysqli_query($conn, $box6_entered_q);
                        $box6_entered_q_number = mysqli_num_rows($box6_entered_q_ex);

                        $box6_test_avi       = "SELECT `ACCESS`,`DATE` FROM `test name` where `TEST NAME`='$db'";
                        $box6_test_avi_ex    = mysqli_query($conn, $box6_test_avi);
                        $box6_test_avi_fetch = mysqli_fetch_assoc($box6_test_avi_ex);

                        echo "<ul class='list-group list-group-horizontal-xxl' style='margin:30px 10px 10px 10px;'>
                        <li class='list-group-item'> Mock name " . $_SESSION['test_name'] . "</li>
                        <li class='list-group-item'> Mock Availibility " . $box6_test_avi_fetch['ACCESS'] . " at " . $box6_test_avi_fetch['DATE'] . "</li>
                        <li class='list-group-item'>Number of Questions " . $sl_num_rows . "</li>
                        <li class='list-group-item'>Time for Mock " . $_SESSION['testduration'] . " min only</li>
                        <li class='list-group-item'>Marks for Right answer : " . $_SESSION['right'] . "</li>
                        <li class='list-group-item'>Marks for Wrong answer : " . $_SESSION['wrong'] . "</li>
                        <li class='list-group-item'>Number of varified students " . $box6_verifified_row . " students only</li>
                        <li class='list-group-item'>Number of Entered questions " . $box6_entered_q_number . " only</li>
                    </ul>";
                        echo "
                    <style>
                        .box6_container {
                          margin:10px;
                          height: 120px;
                          display: flex;
                          flex-wrap: wrap;
                          gap: 10px;
                          margin-button:40px;
                        }
                        .box6_span {
                          flex: 220px;
                          height: 180px;
                          padding:6px;
                          background-color: whitesmoke;
                          border-radius:10px;
                          display: flex;
                          justify-content: center;
                          align-items: left;
                          flex-direction: column;
                          gap: 10px;
                        }
                    </style>";
                        $dbv         = $_SESSION['test_name'] . "_verification";
                        $sl_num      = "SELECT `STUDENT NAME`, `STUDENT TCA NUMBER`, `SECTION NAME` FROM `" . $dbv . "`;";
                        $sl_num_ex   = mysqli_query($conn, $sl_num);
                        $sl_num_rows = mysqli_num_rows($sl_num_ex);

                        echo "<div class='box6_container'>";
                        while ($sl_num_ftch = mysqli_fetch_assoc($sl_num_ex)) {
                            echo "
                    <div class='box6_span'>
                      <span><span style='color: rgb(177, 164, 164);'>Student name</span> " . $sl_num_ftch['STUDENT NAME'] . "</span>
                      <span><span style='color: rgb(177, 164, 164);'>Section name</span> " . $sl_num_ftch['SECTION NAME'] . "</span>
                      <span><span style='color: rgb(177, 164, 164);'>TCA number</span> " . $sl_num_ftch['STUDENT TCA NUMBER'] . "</span>
                    </div>
                    ";
                        }
                        echo "</div>";
                    }
                ?>
        </div>

        <div class="main_box5 main_box">
            <?php
                if (isset($_SESSION['test_name'])) {
                        echo "
                    <form method='post' action='page1.php' class='mt-4 m-2'>
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
                        if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['form40form']))) {
                            $selected_section             = strtoupper($_POST['section']);
                            $_SESSION['selected_section'] = $selected_section;
                            echo "
                        <script>
                            var all = document.querySelectorAll('.main_box');
                            all.forEach(function (items) {
                              items.style.display = 'None';
                            });
                            document.querySelector('.main_box5').style.display = 'block';
                        </script>";

                        }
                        if (isset($_SESSION['selected_section'])) {
                            $selected_section    = $_SESSION['selected_section'];
                            $sl_section          = $_SESSION['selected_section'];
                            $dbv                 = $_SESSION['test_name'] . "_verification";
                            $sle_registration    = "SELECT * FROM `resistration` where `SECTION NAME`='$selected_section';";
                            $sle_registration_ex = mysqli_query($conn, $sle_registration);
                            $box5_var            = 1;
                            echo "<form method='post' action='page1.php' class='mt-5'><div class='box5_container'>";
                            echo "<table class='table mt-5'>
                                        <thead class='thead-dark'>
                                          <tr>
                                            <th scope='col' style='background-color:blue; color:white; font-size:20px;'><input type='checkbox' onclick='selectallinputs()'/> Select all</th>
                                            <th scope='col' style='background-color:blue; color:white; font-size:20px;'>Name</th>
                                            <th scope='col' style='background-color:blue; color:white; font-size:20px;'>Tca number</th>
                                            <th scope='col' style='background-color:blue; color:white; font-size:20px;'>Section name</th>
                                          </tr>
                                        <tbody>
                                        <thead>
                            ";
                            while ($sle_registration_fetch = mysqli_fetch_assoc($sle_registration_ex)) {
                                $box5_verification_status = false;
                                $box5_verification        = "SELECT * FROM `" . $dbv . "`;";
                                $box5_verification_ex     = mysqli_query($conn, $box5_verification);
                                while ($box5_verification_fetch = mysqli_fetch_assoc($box5_verification_ex)) {
                                    if ((strtoupper($sle_registration_fetch['STUDENT TCA NUMBER']) === strtoupper($box5_verification_fetch['STUDENT TCA NUMBER'])) && (strtoupper($sle_registration_fetch['SECTION NAME']) === strtoupper($box5_verification_fetch['SECTION NAME']))) {
                                        $box5_verification_status = true;
                                        break;
                                    } else {
                                        $box5_verification_status = false;
                                    }

                                }
                                if (! ($box5_verification_status)) {
                                    $box5_tca = $sle_registration_fetch['STUDENT TCA NUMBER'];
                                    echo "
                                <style>
                                    input[type='radio']{
                                        height:20px;
                                        width:20px;
                                    }
                                </style>
                                      <tr>
                                        <th><input type='radio' class='inputall' name='$box5_var' value='$box5_tca'/></th>
                                        <td>" . $sle_registration_fetch['STUDENT NAME'] . "</td>
                                        <td>" . $sle_registration_fetch['STUDENT TCA NUMBER'] . "</td>
                                        <td>" . $sle_registration_fetch['SECTION NAME'] . "</td>
                                      </tr>
                                ";
                                    if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['formverification']))) {
                                        if ((isset($_POST[$box5_var]))) {
                                            $box5_v_tca             = $_POST[$box5_var];
                                            $box5_v_student_name    = $sle_registration_fetch['STUDENT NAME'];
                                            $box5_v_student_section = $sle_registration_fetch['SECTION NAME'];

                                            $box5_insert = $conn->prepare("INSERT INTO `" . $dbv . "` (`STUDENT NAME`, `STUDENT TCA NUMBER`, `SECTION NAME`) VALUES (?,?,?)");
                                            $box5_insert->bind_param("sss", $box5_v_student_name, $box5_v_tca, $box5_v_student_section);
                                            $box5_insert->execute();
                                        }
                                        echo "
                                        <script>
                                            document.location.href='page1.php';
                                        </script>";
                                    }
                                }
                                $box5_var++;
                            }
                            echo "
                        <tr>
                           <td><button type='submit' name='formverification' value='submit' class='btn btn-primary'>Submit here</button></td>
                        </tr>
                        </tbody>
                        ";
                            echo "
                        <script>
                         function selectallinputs(){
                            var input=document.querySelectorAll('.inputall');
                            input.forEach(function (buttons){
                                buttons.click();
                            });
                        }
                            </script>
                        ";
                            echo "</div>";
                            echo "</form>
                        ";
                        }
                    } else {
                        echo "<div class='alert alert-primary mt-5 dhaiflex' role='alert'>
                    Please select test name Click above.
                    </div>";
                    }

                ?>
        </div>
        <?php
            } else {
                echo "
        <script>
            document.location.href='admin_autho.php';
        </script>";
            }

        ?>

    </main>
</body>

</html>
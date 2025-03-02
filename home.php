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
    <link rel="stylesheet" href="home.css">
    <title>CTLD Mock test system</title>
</head>

<body>
    <header>
        <div class="navbar">
            <span class="navbar_box2">
                <img src="learning.svg" alt="">
            </span>
            <span class="navbar_box1">
                <div class="navbar_span_box1">CTLD Mock test system</div>
                <div class="navbar_span_box2">Welcome to CTLD Mock test system! We are dedicated to providing a
                    comprehensive and engaging learning experience for students of all ages. Our platform offers a wide
                    range of courses, interactive lessons, and valuable resources to help you achieve your academic
                    goals. Whether you're looking to enhance your skills, prepare for exams, or explore new subjects, we
                    have something for everyone. Join our community of learners and educators today and take the first
                    step towards a brighter future. Start learning, growing, and succeeding with CTLD Mock test system!
                </div>
            </span>
        </div>

    </header>
    <main>
        <div class="icon_for_more">
            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="black">
                <path
                    d="M320-320h480v-480h-80v280l-100-60-100 60v-280H320v480Zm0 80q-33 0-56.5-23.5T240-320v-480q0-33 23.5-56.5T320-880h480q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H320ZM160-80q-33 0-56.5-23.5T80-160v-560h80v560h560v80H160Zm360-720h200-200Zm-200 0h480-480Z" />
            </svg>
        </div>
        <div class="registration_form">
            <form action="home.php" method="post" class="p-2 registration_form_box2">
                <div class="input-group mt-3 text-primary">Registration Form</div>
                <div class="input-group mt-3">
                    <input required type="text" name="firstname" aria-label="First name" placeholder="First name"
                        class="form-control cap">
                    <input required type="text" name="lastname" aria-label="Last name" placeholder="Last name"
                        class="form-control cap">
                </div>
                <div class="input-group mt-3">
                    <input required type="text" name="tca" aria-label="First name" placeholder="Enter your TCA number"
                        class="form-control cap">
                    <input required type="password" name="password" aria-label="Last name" placeholder="Create password"
                        class="form-control cap">
                </div>
                <div class="input-group mt-3">
                    <input required type="text" name="college" placeholder="College's name" class="form-control cap">
                    <input required type="text" name="coursename" placeholder="Course name" class="form-control cap">
                    <select class="form-select" name="section">
                        <option>Section name</option>
                        <option value="SECTION_A">Section A</option>
                        <option value="SECTION_B">Section B</option>
                        <option value="SECTION_C">Section C</option>
                        <option value="SECTION_D">Section D</option>
                        <option value="SECTION_E">Section F</option>
                        <option value="SECTION_F">Section G</option>
                        <option value="SECTION_G">Section H</option>
                        <option value="SECTION_H">Section I</option>
                        <option value="SECTION_I">Section J</option>
                        <option value="NONE">NONE</option>
                        <option value="OTHER">OTHER</option>
                    </select>
                </div>
                <div class="input-group mt-3">
                    <input required type="tel" name="pnumber" placeholder="Parents mobile number" class="form-control">
                    <input required type="tel" name="snumber" placeholder="Students mobile number" class="form-control">
                </div>
                <div class="input-group mt-3">
                    <input required type="email" name="email" placeholder="Email id" class="form-control">
                </div>
                <div class="input-group mt-3">
                    <input type="Reset" value="Reset" class="form-control">
                    <input type="Submit" value="Submit" name="form1" class="form-control">
                </div>
            </form>
            <div class="registration_form_box1">
                <img src="login.jpg" alt="">
            </div>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    if (isset($_POST['form1'])) {
                        require "server.php";
                        $username   = $_POST['firstname'] . " " . $_POST['lastname'];
                        $tca        = $_POST['tca'];
                        $pass       = $_POST['password'];
                        $college    = $_POST['college'];
                        $coursename = $_POST['coursename'];
                        $section    = $_POST['section'];
                        $section    = $_POST['section'];
                        $pnumber    = $_POST['pnumber'];
                        $snumber    = $_POST['snumber'];
                        $email      = $_POST['email'];

                        $insert = $conn->prepare("INSERT INTO `resistration`(`STUDENT NAME`, `STUDENT TCA NUMBER`, `SECTION NAME`, `PASSWORD`, `P NUMBER`, `S NUMBER`, `COLLEGE`, `COURSE NAME`,`EMAIL`) VALUES (?,?,?,?,?,?,?,?,?)");
                        $insert->bind_param("sssssssss", $username, $tca, $section, $pass, $pnumber, $snumber, $college, $coursename, $email);
                        if ($insert->execute()) {
                            $massege = "Your registration is done successfully !";
                        } else {
                            $massege = "Your registration is not done.";
                        }
                    }
                }
            ?>
        </div>
        <div class="login_form">
            <span class="login_form_box1"><img src="admin.jpg" alt=""></span>
            <span class="login_form_box2">
                <form action="" method="post" class="p-2 registration_form_box2">
                    <div class="input-group mt-3 text-primary">Login Form</div>
                    <div class="input-group mt-3">
                        <input type="text" aria-label="First name" placeholder="First name" class="form-control cap">
                        <input type="text" aria-label="Last name" placeholder="Last name" class="form-control cap">
                    </div>
                    <div class="input-group mt-3">
                        <input type="email" placeholder="Email id" class="form-control">
                        <input type="password" placeholder="Your password" class="form-control">
                    </div>
                    <div class="input-group mt-3">
                        <input type="Reset" value="Reset" class="form-control">
                        <input type="Submit" value="Submit" class="form-control">
                    </div>
                </form>
            </span>
        </div>
        <div class="div_for_options">
            <a href="index.php#registration">
                <span><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="black">
                        <path
                            d="M240-160q-33 0-56.5-23.5T160-240q0-33 23.5-56.5T240-320q33 0 56.5 23.5T320-240q0 33-23.5 56.5T240-160Zm0-240q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm0-240q-33 0-56.5-23.5T160-720q0-33 23.5-56.5T240-800q33 0 56.5 23.5T320-720q0 33-23.5 56.5T240-640Zm240 0q-33 0-56.5-23.5T400-720q0-33 23.5-56.5T480-800q33 0 56.5 23.5T560-720q0 33-23.5 56.5T480-640Zm240 0q-33 0-56.5-23.5T640-720q0-33 23.5-56.5T720-800q33 0 56.5 23.5T800-720q0 33-23.5 56.5T720-640ZM480-400q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm40 240v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T863-380L643-160H520Zm300-263-37-37 37 37ZM580-220h38l121-122-18-19-19-18-122 121v38Zm141-141-19-18 37 37-18-19Z" />
                    </svg></span>
                <span>Registration</span>
            </a>
            <a href="index.php#login">
                <span><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="black">
                        <path
                            d="M480-120v-80h280v-560H480v-80h280q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H480Zm-80-160-55-58 102-102H120v-80h327L345-622l55-58 200 200-200 200Z" />
                    </svg></span>
                <span>Login</span>
            </a>
            <a href="">
                <span><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="black">
                        <path
                            d="M438-226 296-368l58-58 84 84 168-168 58 58-226 226ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z" />
                    </svg></span>
                <span>Available tests</span>
            </a>
        </div>
        <div class="detail_about_platform">
            CTLD Mock test system : Where education transforms lives! Our platform offers a vast array of courses from
            fundamental
            subjects like Mathematics and Science to advanced topics like Artificial Intelligence and Data Science,
            designed by experts to ensure engaging learning experiences. We provide interactive tools, including video
            lectures, quizzes, and virtual labs, catering to various learning styles. Our dedicated educators bring
            real-world knowledge, fostering a supportive and collaborative community. With innovative technology, career
            development resources, and 24/7 accessibility, EduVision is your gateway to knowledge and success. Join us
            today and unlock your full potential!
        </div>

    </main>
</body>

</html>
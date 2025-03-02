<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Beiruti:wght@200..900&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <!-- 11/30/24 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- right now added new style  -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+SA:wght@100..400&display=swap" rel="stylesheet">


    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="index.css" />
    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="rightlogo (1).png" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>CTLD</title>
</head>

<body>
    <header>
        <div class="availibility">
            <?php
                session_start();
                if (isset($_SESSION['username']) && (isset($_SESSION['tca'])) && (isset($_SESSION['new_section']))) {
                    $student_name      = $_SESSION['username'];
                    $tca               = $_SESSION['tca'];
                    $student_section   = $_SESSION['new_section'];
                    $_SESSION['login'] = false;
                    $set_user          = true;
                } else {
                    $set_user        = false;
                    $student_name    = "";
                    $tca             = "";
                    $student_section = "";
                }
            ?>
        </div>

        <!-- <div class="navbar_container">
            <div class="img"> <img src="rightlogo (1).png" alt="">
            </div>
            <div class="heading">
                Center For Teaching Learning And Development TMU Mock Test System
            </div>
        </div> -->
        <div class="above_the_fold_">
            <div class="responsive-container-block big-container">
                <div class="responsive-container-block container">
                    <div class="responsive-container-block">
                        <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 left">
                            <p class="text-blk gigcase-head-text">
                                ONLINE EDUCATION
                            </p>
                            <p class="text-blk section-head-text">
                                Online Learning Platform
                            </p>
                            <p class="text-blk section-subhead-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget purus lectus viverra in
                                semper nec pretium mus.
                            </p>
                            <a href="">
                                <button class="button" id="ipjh1-2">
                                    Join for free
                                </button>
                            </a>
                        </div>
                        <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                            <img class="learning-img"
                                src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/learning.svg">
                        </div>
                    </div>
                    <img class="svg half-cloud"
                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/half-cloud.svg">
                    <img class="svg cloud2"
                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/cloud.svg">
                    <img class="svg cloud"
                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/cloud.svg">
                    <img class="svg planet-img"
                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/small-planet.svg">
                </div>
            </div>
            <div class="responsive-container-block card-container">
                <div class="responsive-cell-block wk-desk-4 wk-ipadp-4 wk-tab-6 wk-mobile-12">
                    <div class="card">
                        <img class="points-svg"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourcourses1.svg">
                        <div class="card-content">
                            <p class="text-blk card-head">
                                Useful Courses
                            </p>
                            <p class="text-blk card-subhead">
                                Lorem ipsum dolor sit amet, conse ctetur adipis cing elit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="responsive-cell-block wk-desk-4 wk-ipadp-4 wk-tab-6 wk-mobile-12">
                    <div class="card">
                        <img class="points-svg"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourcourses1.svg">
                        <div class="card-content">
                            <p class="text-blk card-head">
                                Useful Courses
                            </p>
                            <p class="text-blk card-subhead">
                                Lorem ipsum dolor sit amet, conse ctetur adipis cing elit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="responsive-cell-block wk-desk-4 wk-ipadp-4 wk-tab-6 wk-mobile-12">
                    <div class="card">
                        <img class="points-svg"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourcourses1.svg">
                        <div class="card-content">
                            <p class="text-blk card-head">
                                Useful Courses
                            </p>
                            <p class="text-blk card-subhead">
                                Lorem ipsum dolor sit amet, conse ctetur adipis cing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container_for_special">
            <a class="span1">
                <span class="span2">
                    <img src="10813407.jpg" alt="">
                </span>
            </a>
            <a href="login.php" class="span1">
                <span class="span2">
                    Login
                </span>
            </a>
            <a href="Resistration.php" class="span1">
                <span class="span2">
                    Registration
                </span>
            </a>
            <a href="result.php" class="span1">
                <span class="span2">
                    Result
                </span>
            </a>
            <a href="Student_result_download.php" class="span1">
                <span class="span2">
                    Download Result
                </span>
            </a>
            <a href="store.php" class="span1">
                <span class="span2">
                    Store
                </span>
            </a>
        </div>

        <div class="sticy_container_hai">
            <span class="sticy_container_hai_span">
                <a href="login.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="black">
                        <path
                            d="M480-120v-80h280v-560H480v-80h280q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H480Zm-80-160-55-58 102-102H120v-80h327L345-622l55-58 200 200-200 200Z" />
                    </svg>
                    <span>Login</span>
                </a>
            </span>
            <span class="sticy_container_hai_span">
                <a href="Resistration.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#5f6368">
                        <path
                            d="M240-160q-33 0-56.5-23.5T160-240q0-33 23.5-56.5T240-320q33 0 56.5 23.5T320-240q0 33-23.5 56.5T240-160Zm0-240q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm0-240q-33 0-56.5-23.5T160-720q0-33 23.5-56.5T240-800q33 0 56.5 23.5T320-720q0 33-23.5 56.5T240-640Zm240 0q-33 0-56.5-23.5T400-720q0-33 23.5-56.5T480-800q33 0 56.5 23.5T560-720q0 33-23.5 56.5T480-640Zm240 0q-33 0-56.5-23.5T640-720q0-33 23.5-56.5T720-800q33 0 56.5 23.5T800-720q0 33-23.5 56.5T720-640ZM480-400q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm40 240v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T863-380L643-160H520Zm300-263-37-37 37 37ZM580-220h38l121-122-18-19-19-18-122 121v38Zm141-141-19-18 37 37-18-19Z" />
                    </svg>
                    <span>Registration</span>
                </a>
            </span>
            <span class="sticy_container_hai_span"><a href="result.php">Result</a></span>
            <span class="sticy_container_hai_span">
                <a href="Student_result_download.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#5f6368">
                        <path
                            d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                    </svg>
                </a>
                <span>Download result</span>
            </span>
            <span class="sticy_container_hai_span">
                <a href="store.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#5f6368">
                        <path
                            d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm80 240v-80h400v80H280Zm0 160v-80h280v80H280Z" />
                    </svg>
                </a>
                <span>Store</span>
            </span>
        </div>

        <div class="courses">
            <div class="div1">
                <div class="div2">
                    <span class="topics">Communication Skills:</span>
                    <span id="span">
                        Courses designed to improve verbal and non-verbal communication,
                        public speaking, and presentation skills.
                    </span>
                </div>
            </div>
            <div class="div1">
                <div class="div2">
                    <span class="topics">Teamwork and Collaboration:</span>
                    <span id="span">
                        Programs that focus on building effective teamwork, conflict
                        resolution, and collaborative problem-solving.
                    </span>
                </div>
            </div>
            <div class="div1">
                <div class="div2">
                    <span class="topics">Leadership Development:</span>
                    <span id="span">
                        Training sessions to develop leadership qualities, decision-making
                        skills, and strategic thinking.
                    </span>
                </div>
            </div>
            <div class="div1">
                <div class="div2">
                    <marquee class="topics" behavior="" direction="">Critical Thinking and Problem-Solving:
                    </marquee>
                    <span id="span">
                        Workshops that encourage analytical thinking, creativity, and
                        innovative solutions to complex problems.
                    </span>
                </div>
            </div>
            <div class="div1">
                <div class="div2">
                    <span class="topics">Professional Development:</span>
                    <span id="span">
                        Seminars and workshops on resume writing, interview skills, and career
                        counseling.
                    </span>
                </div>
            </div>
            <div class="div1">
                <div class="div2">
                    <span class="topics">Cultural Awareness and Global Perspectives:</span>
                    <span id="span">
                        Courses that promote understanding and appreciation of diverse
                        cultures and global issues.
                    </span>
                </div>
            </div>
            <div class="div1">
                <div class="div2">
                    <span class="topics">Ethics and Social Responsibility:</span>
                    <span id="span">
                        Programs that emphasize ethical behavior, social responsibility, and
                        community engagement.
                    </span>
                </div>
            </div>
            <div class="div1">
                <div class="div2">
                    <span class="topics">Mental Health and Well-Being:</span>
                    <span id="span">
                        Resources and workshops focused on stress management, mental health
                        awareness, and overall well-being.
                    </span>
                </div>
            </div>
        </div>

        <div class="navbar_container_1">
            <div class="container1">
                <div class="container2">
                    <span>Empowering Students with Essential Soft Skills </span>
                    <span>
                        CTLD focuses on enhancing students' competencies in communication,
                        teamwork, leadership, and problem-solving. These skills are critical
                        for personal and professional success
                    </span>
                </div>
            </div>
            <div class="container1">
                <div class="container2">
                    <span>Nurturing Innovation and Critical Thinking </span>
                    <span>
                        Promoting a culture of innovation and critical thinking is at the
                        core of CTLD's vision. Students are encouraged to question
                        conventional wisdom, think creatively, and develop solutions to
                        complex problems.
                    </span>
                </div>
            </div>
            <div class="container1">
                <div class="container2">
                    <span>Fostering Global Perspectives and Cultural Awareness </span>
                    <span>
                        CTLD aims to broaden students' horizons by exposing them to diverse
                        cultures and perspectives. This global outlook prepares students to
                        thrive in an interconnected world.
                    </span>
                </div>
            </div>
            <div class="container1">
                <div class="container2">
                    <span>
                        Facilitating Continuous Learning and Professional Development
                    </span>
                    <span>
                        The center advocates for lifelong learning, offering various
                        workshops, seminars, and training programs that keep students and
                        faculty updated with the latest knowledge and skills.
                    </span>
                </div>
            </div>
            <div class="container1">
                <div class="container2">
                    <span>Strengthening Ethical and Moral Foundations </span>
                    <span>
                        Instilling strong ethical and moral values is a priority. CTLD
                        emphasizes the importance of integrity, respect, and social
                        responsibility in all aspects of life.
                    </span>
                </div>
            </div>
            <div class="container1">
                <div class="container2">
                    <span>Enhancing Teaching Methods and Academic Excellence </span>
                    <span>
                        Through innovative teaching methods and a commitment to academic
                        excellence, CTLD strives to provide a supportive and stimulating
                        learning environment. Faculty development programs are designed to
                        enhance teaching effectiveness and student engagement.
                    </span>
                </div>
            </div>
            <div class="container1">
                <div class="container2">
                    <span>Building a Supportive and Collaborative Community</span>
                    <span>
                        Creating a sense of community and collaboration is vital. CTLD
                        fosters an environment where students, faculty, and staff support
                        and learn from each other.
                    </span>
                </div>
            </div>
            <div class="container1">
                <div class="container2">
                    <span>Promoting Well-Being and Mental Health</span>
                    <span>
                        Ensuring the well-being and mental health of students and faculty is
                        paramount. CTLD offers resources and programs to support mental
                        health, stress management, and overall well-being.
                    </span>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container_fixed">
            <span id="closebu" onclick="closetab()"><span>close</span></span>
            <span>Welcome to the Center For Teaching Learning And Development (CTLD-OMS). We are thrilled to have you
                join us on this exciting educational journey. At the Center for Teaching and Learning, our goal is to
                create an environment where your passion for learning can flourish. Whether you are here to enhance your
                academic skills, seek support for your studies, or explore new interests, we are dedicated to helping
                you achieve your full potential.</span>
        </div>
    </main>
    <footer>
    </footer>
    <script src="index.js"></script>
</body>

</html>
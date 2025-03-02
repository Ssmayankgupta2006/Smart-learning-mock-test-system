<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="icon" href="rightlogo (1).png"/>
    <title>Admin Authentication</title>
</head>
<body>
    <div class="container">
    <form class="mt-3" action="admin_autho.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Enter your name</label>
          <input required type="text" autocomplete="Name" name="name" class="form-control" id="exampleInputEmail1">
          <div class="form-text">Do not share your password with anyone.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputtca" class="form-label">Enter your TCA number</label>
          <input required type="text" autocomplete="Tca number" name="tca" class="form-control" id="exampleInputtca">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Enter your Password</label>
          <input required type="password" autocomplete="Password" name="pass" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input required type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Recheck all information carefully</label>
        </div>
        <button type="submit" name="formau" value="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
    require "server.php";
    if(($_SERVER['REQUEST_METHOD']=="POST")&&(isset($_POST['formau']))){
        $name=$_POST['name'];
        $tca=$_POST['tca'];
        $pass=$_POST['pass'];
        $check=$_POST['check'];
        if($check=="on"){
            $in="SELECT `NAME`, `TCA`, `PASSWORD` FROM `admin_authontication` where `NAME`='$name' and `TCA`='$tca' and `PASSWORD`='$pass';";
            $in_ex=mysqli_query($conn,$in);
            $in_ex_fetch=mysqli_fetch_assoc($in_ex);
            if($in_ex_fetch){
                $_SESSION['auth']="DONE";
                echo "
                <script>
                    document.location.href='page1.php';
                </script>
                ";
            }
            else{
                $_SESSION['auth']="NOTDONE";
                if(!isset($_SESSION['wrong_number'])){
                    $_SESSION['wrong_number']=1;
                }
                else{
                    $_SESSION['wrong_number']+=1;
                }
            }
        }
        if(isset($_SESSION['wrong_number'])&&(($_SESSION['wrong_number']>=3))){
            echo "<div class='alert alert-danger' role='alert'>
               WARNING: You are approaching the limit of allowed attempts. You will be blocked after available attempts . Double-check your information to ensure it is accurate.
            </div>";
        }
    }
    ?>
    </div>
</body>
</html>
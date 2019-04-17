<?php
    require_once('./config.php');
    require_once('./CommonFunc.php');
    session_start();
    require_once('./Content.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in | English Turtle</title>
    <link rel="stylesheet" href="webAnimation.css">
    <link rel="icon" href="img/turtle.jpeg">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <script src="/common.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('input[name="email"]').focusout(function () {
                var email = $('input[name="email"]').val();
                $.ajax (
                    {
                        url:'CheckLogin.php',
                        type: "POST",
                        dataType: "text",
                        data: {
                            email : email
                        },
                        success: function (result) {

                                result = result.trim();
                                if (result != "true" && result != "email has already existed") {
                                    $('#err').addClass("error");
                                    $('#err').html(result);
                                }
                                else {
                                    $('#err').removeClass("error");
                                    $('#err').replaceWith('<span id="err"></span>');
                                }
                        }
                    }
                )
            });
        });

    </script>
</head>
<body>
<?php
 if (isset($_POST['submit'])){
     //get data
     $email = clear_input($_POST['email']);
     $password = clear_input($_POST['password']);
     $sql = "SELECT * from users where email = '$email'";
     $result = $conn ->query($sql);
     if ($result->num_rows > 0) {
         //email exist ;
         $row = $result->fetch_assoc();
         $realPass = $row['password'];
         if (password_verify($password,$realPass)){
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            header("location: index.php");
        }
        else{
            echo"<script>alert('Email or password  incorrect! ')</script>";
        }
     }
     else echo"<script>alert('Email or password  incorrect! ')</script>";


     //check login


 }
?>
<div class="header" style="min-height: 700px">
    <div class="contact1">
        <p>Have any questions? </p>
        <i class="fa fa-phone-square" aria-hidden="true"></i><a href="">+84 1222 000 596</a>
        <i class="fa fa-envelope-square" aria-hidden="true"></i><a href="">Englishturtle@gmail.com</a>
    </div>
    <div class="menu">
        <a href="/" style="text-decoration: none;"> <p class="name"><span>English</span><i style="color:#00000094;">|</i>Turtle</p> </a>
        <div class="choice active">
            <a href="/">Home</a>
        </div>
        <div class="duongke"></div>
        <div class="choice">
            <a href="about_us.php">About Us</a>
        </div>
        <div class="duongke"></div>
        <div class="choice">
            <a href="Contact.php">Contact</a>
        </div>
        <div class="duongke"></div>
        <div class="choice" onmouseover="showDropDown();" onmouseout="hiddenDropDown()" >
                <span class="learn" >Learn English<i class="arrow down"></i></span>
        </div>
        <div class="learn_menu" onmouseover="showDropDown();" onmouseout="hiddenDropDown();">
            <a href="/LearnVocabulary.php">Learn Vocabulary</a>
            <hr>
            <a href="/LearnGrammar.php">Learn Grammar</a>
            <hr>
            <a href="/LearnListening.php">Learn Listening</a>
            <hr>
        </div>
        <div class="duongke"></div>
        <div class="choice end">
            <a href="login.php">Login</a>
        </div>
    </div>
    <div class="content1">
        <div class="container">
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <p><strong>Email</strong></p><span id="err"></span>
                        <input type="text" name="email" placeholder="Email" required class="email_form" id="email">
                        <p><strong>Password</strong></p>
                        <input type="password" name="password" placeholder="Password" required>
                        <input type="submit" name ="submit" value="Login" class="btn-login">
                    </div>
                    <br>
                </div>
            </form>
        </div>

        <div class="bottom-container">
            <div class="bar1">

                <a href="Register.php" class="btn" style="float: left; margin-left: 20px; margin-top: 10px;">Sign up</a>
            </div>
        </div>
    </div>
    <img src="4.png" alt="">
</div>
<?php getFooter();?>
</body>
</html>
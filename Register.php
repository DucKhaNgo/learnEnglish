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
	<title>Register</title>
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
                            if (result != "true") {
                                $('#err').addClass("error");
                                $('#err').html(result);
                                $('#email').addClass("error");
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
        $email = $emailErr = "";
        $emailErr = $passwordErr = "";
        $name = $nameErr = "";
        $password = $passwordErr = "";
        //Server receive data from client with method POST
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //check input
            $errlog = checkInput($_POST['email'],$_POST['name'],$_POST['password'],$_POST['psw-repeat']);
            // if input correct
            if (empty($errlog)) {
                $email = clear_input($_POST['email']);
                $name = clear_input(($_POST['name']));
                $password = clear_input($_POST['password']);
                // hasing password
                $password = password_hash($password,PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (email,name,password)
                        VALUES ('$email','$name','$password')";
                if ($conn->query($sql) === TRUE) {
                    // direct to homepage
                    //add session
                    $_SESSION['name'] = $name;
                    $_SESSION['email'] = $email;
                    
                    header("Location: /index.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
?>
	<div class="header" style="min-height: 750px">
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

		<img src="4.png" alt="">
	</div>
<div class="content1">
    <form action="Register.php" method="post">
        <div class="container">
            <h2 style="color: blue">Register</h2>
            <!--  --><?php
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                foreach ($errlog as $item) {
                    echo "<font color='red'>".$item."</font>";
                    echo "<hr>";
                }
            } else {
                echo "<p>Please fill in this form to create an account.</p>";
            }
            ?>
            <label for="email"><b>Email</b></label>
            <span id="err"></span>
            <span class="error">* <?php echo $emailErr;?></span>
            <input type="text" placeholder="Enter Email" name="email" required>
            <label for="name"><b>Name</b></label>
            <span class="error">*</span>
            <input type="text" placeholder="Enter Name" name="name" required>
            <label for="psw"><b>Password</b></label>
            <span class="error">* <?php echo $passwordErr;?></span>
            <input type="password" placeholder="Enter Password" name="password" required>
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
            <span class="error"><?php echo $passwordErr;?></span>
            <hr>

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <input type="submit" class="registerbtn" value="Register">
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
    </form>
</div>
<?php getFooter();?>
</body>
</html>
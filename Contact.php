<?php
require_once('./config.php');
require_once('./CommonFunc.php');
session_start();
require_once('./content.php');
//Server receive data from client with method POST
if (isset($_POST['submit'])) {
	if (!empty($_POST['comments'])) { // check comment
   
		//get email and comment from user
		$email = isset($_SESSION['email']) ?($_SESSION['email']) : "Anomynous";
		$comments = $_POST['comments'];
		// add comment to DB
		$sql = "INSERT INTO comments (email,comments) 
				VALUES ('$email','$comments')";
		if ($conn->query($sql) === TRUE) { // add successfully
			echo "<script> alert('Thank you for contacting us, We will reply to you soon. ')</script>";
			echo "<script> window.location.replace('/');</script>";
		} else {
			echo "Error: ".$sql. "<br>".$conn->error;
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>EnglishTurtle</title>
	<link rel="stylesheet" href="webAnimation.css">
	<link rel="icon" href="img/turtle.jpeg">

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
	 crossorigin="anonymous">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<script src="/common.js"></script>
	<style>
		.header{
			min-height: 700px !important;
		}
		input[type="submit"] {
			padding: 7px 15px;
			margin-left: 183px;
			border: none;
			border-radius: 8%;
			background-color: green;
			color: white;
		}
	</style>
</head>
<body>
	<?php getHeader();?>
	   <div class="content" style='width:80%; margin:unset'>
       <h2 style="text-align: left;font-size: 30px; color: red;margin-bottom: 20px;font-family: 'Montserrat', sans-serif;">Please contact the information below</h2>
		 <p class="prepare"><span style="font-size: 17px;"><span style="color:red">Email: </span>Englishturtle@gmail.com</span></p>
		 <p class="prepare"><span style="font-size: 17px"><span style="color:red">Hotline:</span> +84 1222 000 596</span></p>
		 <p class="prepare"><span style="font-size: 17px;"><span style="color:red">Facebook: </span>https://www.facebook.com/englishturtle</span></p></br>
		<p style="font-weight: bold;font-family: 'Montserrat', sans-serif;"><b>If you have any special requests or messages for us, please enter here</b></p></br>
        <form action="" method="post">
            <textarea name="comments" cols="60" rows="10" wrap="off"></textarea>
            <br>
            <input type="submit" value="Send" name="submit">
        </form>
        </div>
    </div>
    <!-- END CONTENT -->
</div>
	<?php getFooter();?>
</body>

</html>
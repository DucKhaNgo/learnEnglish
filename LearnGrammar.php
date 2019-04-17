<?php
require_once('./config.php');
require_once('./CommonFunc.php');
require_once('./Content.php');
session_start();
checkAuth();
checkFirstTest();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EnglishTurtle</title>
    <link rel="stylesheet" href="webAnimation.css">
    <link rel="icon" href="img/turtle.jpeg">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/common.js"></script>
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
<!-- header bar -->
<?php getHeader(); ?>
    <!-- end header bar -->
	<?php 
	//get current level + name of topic
	$email = $_SESSION['email'];
	$query = "select * from score where email = '$email'";
	$result = $conn ->query($query);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$level = $row['levelVocabulary'];
			$levelFT = $row['levelFT'];
		}
	}
	//check max level
	if ($level > 5){
		echo "<script>window.alert('You level is max !');</script>";
		echo "<script>window.location.replace('/')</script>";
	}
	?>
    <!-- CONTENT -->
    <div class="content" style='width:80%; margin:unset'>
        <div >
           <h2 style="margin-left: 325px; font-size: 30px; color: red;margin-bottom: 20px;font-family: 'Montserrat', sans-serif;">English Grammar</h2>
            <a href="theoryGrammar.php" class="btn1">Learn Theory</a>
            <a href="excersiseGrammar.php" class="btn1">Do Exercise</a>
        </div>
    </div>

    <!-- END CONTENT -->
</div>
<?php getFooter(); ?>

</body>
</html>

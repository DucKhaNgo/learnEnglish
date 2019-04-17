<?php
require_once('./config.php');
require_once('./CommonFunc.php');
session_start();
require_once('./content.php');
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
	</style>
</head>
<body>
	<?php getHeader();?>
	   <div class="content" style='width:80%; margin:unset'>
       <h2 style="text-align: left;font-size: 30px; color: red;margin-bottom: 20px;font-family: 'Montserrat', sans-serif;">About English Turtle</h2>
		 <p class="prepare" align="justify">English Turtle is a product of the students in University of Sciences (HCMUS), designed to help Vietnamese students remove barriers to English language. Instead of learning single words and boring grammar rules, English Turtle teaches you to look for meaningful phrases. When you study phrases, you learn both vocabulary and grammar at the same time.</p>
		 <p class="prepare" align="justify">In each lesson, we introduce a natural English sentence, explain when you can use it, and break it down into
		meaningful words and phrases. </p>
       <p class="prepare">Thank you for your attention!</p>
       <a class="prepare" href="/index.php" style="color: red">Home</a>

    </div>
    <!-- END CONTENT -->
</div>
	<?php getFooter();?>
</body>

</html>
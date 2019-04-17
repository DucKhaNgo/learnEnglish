<?php
require_once('./config.php');
require_once('./CommonFunc.php');
require_once('./Content.php');
session_start();
checkAuth();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>English Proficiency Test</title>
    <link rel="stylesheet" href="/webAnimation.css">
    <link rel="icon" href="img/turtle.jpeg">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <script>
        $(document).ready(function() {
            // if login -> change name+ href of login : Profile
            var str = $("#status").text();
            if (str.trim() !== "")
                $("#login").text("My Profile").attr("href", "/profile");
        })
        //show dropdown menu:
        function showDropDown() {
            $('.learn_menu').css('display','block');
        }
        function hiddenDropDown() {
            if ($('.learn_menu:hover').length === 0) {
                // do something ;)
                $('.learn_menu').css('display','none');
            }
        }
    </script>
    <style>
    .header{
        min-height: 700px !important;
    }
    </style>
</head>
<body>
<?php 
	$email = $_SESSION['email'];
	if (!isset($_POST['btn-submit'])) header('Location: index.php');
	$level = $_POST['level'];
	$levelFT = $_POST['levelFT'];
	$query = "select * from answer_vocabulary where Level = '$level' and LevelFT = '$levelFT'";
	$result = $conn ->query($query);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			$score = 0;
			for($i = 1;$i<=5;$i++){
				if ($_POST[$i] == $row['question'.$i]) 
					$score = $score + 1;;
			}
		}
	}
	else  header('Location: index.php');
?>
<?php getHeader();?>
    <!-- end header bar -->
    <!-- CONTENT -->
    <!-- Test -->
	<?php 
	
	$query = "update scorevocabularytest set level".$level." = $score where email = '$email' ";
	$conn->query($query);
	//write on Database
	if ($score >=4) {
			$level ++;
			$query = "update score set levelVocabulary = '$level'  where email = '$email'";
			$conn->query($query);
	}
	
		
	?>
    <div class="content" style='width:80%; margin:unset'>
       <h2 style="text-align: center;font-size: 30px; color: red;margin-bottom: 20px;font-family: 'Montserrat', sans-serif;">Vocabulary Test</h2>
       <p class="prepare">Hello <?php echo $_SESSION['name']; ?></p>
       <p class="prepare">Your score : <?php echo $score;?></p>
	   <?php if ($score >=4) echo "<p class='prepare'>You Pass it ! </p>" ;
			else echo "<p class = 'prepare'>You fail it , Try again !</p>";
	   ?>
	   
       <p class="prepare">Thank you for your attention!</p>
       <a class="prepare" href="/index.php">Home</a>

    </div>
    <!-- END CONTENT -->
</div>
<?php getFooter(); ?>
</body>
</html>
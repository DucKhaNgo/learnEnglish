<?php
require_once('./config.php');
require_once('./CommonFunc.php');
session_start();
require_once('./Content.php');
checkAuth();

    if(isset($_POST['submit'])) {
        $sql = "SELECT * FROM answerfirsttest";
        $result = $conn ->query($sql);
        $score = 0;
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id = $row['question'];
                if($row['answer'] == $_POST[$id]) {
                    $score++;
                }
            }
			if ($score > 15) {
                    $level = "Intermediate";
				} 
			else {
                    $level = "Beginer";
            }
            $email = $_SESSION['email'];
			if ($level == "Intermediate"){
				$query = "Delete from score where email = '$email'";
				$conn->query($query);
				$query = "INSERT INTO score (email,scoreFT,levelFT)
                    VALUES ('$email','$score','$level')";
				$conn->query($query);
				$query = "update table scorevocabularytest set level1 = NULL, level2 = NULL, level3 = NULL, level4 = NULL, level5 = NULL where email = '$email'";
                $conn->query($query);
				$query = "update table scorelisteningtest set level1 = NULL, level2 = NULL, level3 = NULL, level4 = NULL, level5 = NULL where email = '$email'";
                $conn->query($query);
			}
        }
    }
    else{
        header("Location: /index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EnglishTurtle</title>
    <link rel="stylesheet" href="webAnimation.css">
    <link rel="icon" href="img/turtle.jpeg">
    <script src="/common.js"></script>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<style>
		.formQuestion{
			font-family: 'Montserrat', sans-serif;
		}
	</style>
</head>
<body>
    <!-- header bar -->
    <?php getHeader(); ?>
    <!-- end header bar -->
    <!-- CONTENT -->
    <!-- Test -->
    <div class="formQuestion">
        <h2 style="text-align:center;">English Proficiency Test</h2>
		<br>
        <?php
                echo "<p>That's great. You answered ".$score." out of 20 questions correctly.</p><br>";
                echo "<p>Your level Now: ";
                echo '<span style="color: red">'.$level.'</span></p><br>';
				if ($level == 'Intermediate'){
					$sql = "UPDATE users SET level='$level' WHERE email = '$email'";
					$result = $conn->query($sql);
                }
        ?>
        <p>Let's enjoy our lesson to increase your English skills</p>
		<br><br>
        <a href="/LearnVocabulary.php" style="margin-right: 50px;">Learn Vocabulary</a>
        <a href="/LearnGrammar.php" style="margin-right: 50px">Learn Grammer</a>
        <a href="/LearnListening.php" style="margin-right: 50px">Lear Listening</a>
    </div>
    <!-- END CONTENT -->
</div>
<?php getFooter(); ?>

</body>
</html>

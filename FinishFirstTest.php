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
            $sql = "INSERT INTO score (email,scoreFT,levelFT)
                    VALUES ('$email','$score','$level')";
            if($conn ->query($sql) !== TRUE) {
                echo "<script>alert('You only do this test once')</script>";
                header("location: index.php");
            }
			else{
				//set score in vocabulary test
				$sql = "insert into scorevocabularytest (email) values ('$email') ";;
                $result = $conn->query($sql);
				//set score in listening test
				$sql = "insert into scorelisteningtest (email) values ('$email') ";;
                $result = $conn->query($sql);
			}
        }
    }
    else{
        header("location: index.php");
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
                echo "<p><b>That's great. You answered ".$score." out of 20 questions correctly.</b></p><br>";
                echo "<p><b>Your level Now: ";
                echo '<span style="color: red">'.$level.'</span></b></p><br>';
                $sql = "UPDATE users SET level='$level' WHERE email = '$email'";
                $result = $conn->query($sql);
                if($result !== TRUE) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
        ?>
        <p><b>Let's enjoy our lesson to increase your English skills</b></p>
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

<?php
require_once('./config.php');
require_once('./CommonFunc.php');
session_start();
require_once('./Content.php');
checkAuth();

    if(isset($_POST['submit'])) {
        $sub_id = $_POST['test'];
        $sql = "SELECT * FROM answergrammartest where sub_id=$sub_id";
        $result = $conn->query($sql);
        $score = 0;
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id = $row['id'];
                if(isset($_POST[$id])) {
                    if($row['answer'] == $_POST[$id]) {
                        $score++;
                    }
                 }
            }
            $email = $_SESSION['email'];
            $sql = "INSERT INTO scoregrammartest (email,sub_id,level,score)
                    VALUES ('$email','$sub_id','1','$score');";
            if($conn->query($sql) !== TRUE) {
                $sql = "UPDATE scoregrammartest SET sub_id=$sub_id, score=$score where email='$email';";
                $conn->query($sql);
            } else {
                
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
</head>
<body>

<!-- header bar -->
<?php getHeader(); ?>
    <!-- end header bar -->
    <!-- CONTENT -->
    <!-- Test -->
    <div class="content" style='width:80%; margin:unset'>
       <h2 style="text-align: center;font-size: 30px; color: red;margin-bottom: 20px;font-family: 'Montserrat', sans-serif;">Grammar Test</h2>
       <p class="prepare">Hello <?php echo $_SESSION['name']; ?></p>
       <p class="prepare">Your score : <?php echo $score;?></p>
       <?php if ($score >=4) {
                $sql = "SELECT * FROM score where email = '$email'";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $level = $row['levelGrammar'];
                    $level++;
                    $sql= "UPDATE score SET levelGrammar=$level where email='$email'";
                    $result = $conn->query($sql);
                }
                echo "<p class='prepare'>You Pass it ! </p>" ;
             }
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

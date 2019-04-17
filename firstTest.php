<?php
require_once('./config.php');
require_once('./CommonFunc.php');
session_start();
require_once('./Content.php');
checkAuth();

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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <script src="/common.js"></script>

</head>
<body>
<!-- header bar -->
<?php getHeader();?>
    <!-- end header bar -->
    <!-- CONTENT -->
    <!-- Test -->
        <div class="formQuestion">
        <h2 style="color:red;text-align:center;font-size:32px;">English Proficiency Test</h2>
            <br>
            <form action="/FinishFirstTest.php" method="post">
                <ol>
                <?php
                if(isset($_SESSION['email'])) { // check login
                    // get datatest form DB
                    $sql = "SELECT * from firsttest";
                    $result = $conn->query($sql);
                    //get data successful
                    if($result->num_rows >0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<li class='questions'>".$row['questionPart1'].' '; // render for UI
                            echo "<select name=".$row['id'].">";
                            echo "<option value></option>";
                            echo "<option value='".$row['answerA']."'>".$row['answerA']."</option>";
                            echo "<option value='".$row['answerB']."'>".$row['answerB']."</option>";
                            echo "<option value='".$row['answerC']."'>".$row['answerC']."</option>";
                            echo "<option value='".$row['answerD']."'>".$row['answerD']."</option>";
                            echo "</select> ".$row['questionPart2']."</li>";
                        }
                    }
                }
                ?>
                </ol>
                <input class="btn-login" type="submit" value="Finish" style="margin-bottom:30px;border-radius:7%;margin-left:45%;" name="submit">
            </form>
        </div>
    <!-- END CONTENT -->
</div>
<?php getFooter(); ?>

</body>
</html>

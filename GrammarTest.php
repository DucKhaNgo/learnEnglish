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
        <h2>Bài tập ngữ pháp tiếng Anh</h2>
            <br>
            <form action="/FinishGrammarTest.php" method="post">
                <ol>
                <?php
                if(isset($_SESSION['email'])) { // check login
                    // get datatest form DB
                    $id = 1;
                    if(isset($_GET['test']))
                        $id = $_GET['test'];
        
                    $sql = "SELECT * from grammartest where sub_id = $id";
                    $result = $conn->query($sql);
                    //get data successful
                    if($result->num_rows >0) {
                        while($row = $result->fetch_assoc()) {
                            if($id != 6) {
                            echo"<li class='questions'>".$row['questionPart1']." ______ ".$row['questionPart2']."<br>"; // render for UI
                            }
                            else {
                            echo"<li class='questions'>".$row['questionPart1']."<br>"; // render for UI
                            }
                            echo "<input type='radio' name=".$row['id']." value='".$row['answerA']."'style='margin:10px'>".$row['answerA']."<br>";
                            echo "<input type='radio' name=".$row['id']." value='".$row['answerB']."'style='margin:10px'>".$row['answerB']."<br>";
                            echo "<input type='radio' name=".$row['id']." value='".$row['answerC']."'style='margin:10px'>".$row['answerC']."<br>";
                            echo "<input type='radio' name=".$row['id']." value='".$row['answerD']."'style='margin:10px'>".$row['answerD']."<br>";
                            echo "</li>";
                        }
                    }
                    echo "<input type='hidden' name='test' value='".$id."'>";
                }
                ?>
                </ol>
                <input class="btn" type="submit" value="Finish" style= "margin:auto;margin-bottom:30px;" name="submit">
            </form>
        </div>
        
    <!-- END CONTENT -->
</div>

<?php getFooter(); ?>

</body>
</html>

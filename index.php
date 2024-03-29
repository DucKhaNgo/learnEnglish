<?php
require_once('./CommonFunc.php');
require_once('./config.php');
require_once('./Content.php');

session_start();
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
    <style>
        .header{
            min-height: 700px !important;
        }
    </style>
    <script>
        $(document).ready(function(){
            var trangthai = 0;
            var trangthai2 = 1;
            var trangthai3 = 1;
            var curGoc = 0 ;
            var curGoc2 = 120;
            var curGoc3 = 240;
            function Quay(){
                //Node1:
                var node1 = $(".node1");
                if (curGoc >= 360) curGoc-=360;
                if (curGoc >= 90) trangthai = 1;
                if (curGoc >= 270) trangthai = 0;
                if(trangthai==0){
                    var nextTop = 56.5 - Math.sin(curGoc * Math.PI / 180)*60;
                    var nextLeft = 56.5 - Math.sqrt(3600 - (56.5 - nextTop)*(56.5 - nextTop));
                }
                else{
                    var nextTop = 60 - Math.cos((curGoc-90) * Math.PI / 180)*60  - 3.5;
                    var nextLeft = 56.5 + Math.sqrt(3600 - (56.5 - nextTop)*(56.5 - nextTop));
                }
                node1.css({"top":nextTop+"px","left":nextLeft+"px"});
                curGoc = curGoc + 1;
                //Node2:
                var node2 = $(".node2");
                if (curGoc2 >= 360) curGoc2-=360;
                if (curGoc2 >= 90) trangthai2 = 1;
                if (curGoc2 >= 270) trangthai2 = 0;
                if(trangthai2==0){
                    var nextTop2 = 56.5 - Math.sin(curGoc2 * Math.PI / 180)*60;
                    var nextLeft2 = 56.5 - Math.sqrt(3600 - (56.5 - nextTop2)*(56.5 - nextTop2));
                }
                else{
                    var nextTop2 = 60 - Math.cos((curGoc2-90) * Math.PI / 180)*60  - 3.5;
                    var nextLeft2 = 56.5 + Math.sqrt(3600 - (56.5 - nextTop2)*(56.5 - nextTop2));
                }
                node2.css({"top":nextTop2+"px","left":nextLeft2+"px"});
                curGoc2 = curGoc2 + 1;
                //Node3:
                var node3 = $(".node3");
                if (curGoc3 >= 360) curGoc3-=360;
                if (curGoc3 >= 90) trangthai3 = 1;
                if (curGoc3 >= 270) trangthai3 = 0;
                if(trangthai3==0){
                    var nextTop3 = 56.5 - Math.sin(curGoc3 * Math.PI / 180)*60;
                    var nextLeft3 = 56.5 - Math.sqrt(3600 - (56.5 - nextTop3)*(56.5 - nextTop3));
                }
                else{
                    var nextTop3 = 60 - Math.cos((curGoc3-90) * Math.PI / 180)*60  - 3.5;
                    var nextLeft3 = 56.5 + Math.sqrt(3600 - (56.5 - nextTop3)*(56.5 - nextTop3));
                }
                node3.css({"top":nextTop3+"px","left":nextLeft3+"px"});
                curGoc3 = curGoc3 + 1;

            }
            //Quay();
            setInterval(Quay,8);
        });
    </script>

</head>
<body>
<?php if (!isset($_SESSION['email'])) {
    echo '<div class="parent">
    <div class="contact">
        <div class="register">
            <a href="/Register.php">Register <span>Now</span></a>
        </div>
    </div>
    <div class="node1" id="node1"></div>
    <div class="node2" id="node2"></div>
    <div class="node3" id="node3"></div>
</div>';
    }
?>

<!-- header bar -->
<?php getHeader(); ?>

    <!-- end header bar -->
    <div class="content">
        <p class="topcontent"><span>100 </span>English Lessons</p>
        <p class="botcontent">Learn English for every situation</p>
        <p class="botcontent">Join today to access the world's best program for learning English</p>
        <?php if (isset($_SESSION['name'])) {
            $email = $_SESSION['email'];
            $sql = "SELECT * from score where email = '$email'";
            $result = $conn ->query($sql);
            if($result->num_rows > 0) {
                echo '<a class="btn" href="Myprofile.php">Learn English Now</a>';
            } else {
                echo '<a class="btn" href="firstTest.php">Learn English Now</a>';
            }
          } else {
            echo '<a class="btn" href="/Register.php">Register Now</a>';
        }
        ?>
    </div>
    <img src="4.png" alt="">
</div>
<?php getFooter(); ?>

</body>
</html>
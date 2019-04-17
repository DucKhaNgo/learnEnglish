<?php
require_once('./config.php');
require_once('./CommonFunc.php');
require_once('./Content.php');

session_start();
checkAuth();
checkFirstTest();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vocabulary</title>
    <link rel="stylesheet" href="webAnimation.css">
    <link rel="icon" href="img/turtle.jpeg">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <script src="/common.js"></script>
    <script>
        $(document).ready(function() {
            // if login -> change name+ href of login : Profile
            var str = $("#status").text();
            if (str.trim() !== "")
                $("#login").text("My Profile").attr("href", "/profile");
        })
        
        var y,rotYINT,index;
        var ny= [0,0,0,0,0,0,0,0,0,0,0];
        var play = [true,true,true,true,true,true,true,true,true,true,true];
        function rotateYDIV(c)
        {
            y=document.getElementById("Voca" + c);
            clearInterval(rotYINT);
            $('#Voca'+c+' .front').toggleClass('first');
            $('#Voca'+c+' .behind').toggleClass('first');
            rotYINT=setInterval("startYRotate()",8);
        }
        function startYRotate()
        {
            ny[index]=ny[index]+6
            y.style.transform="rotateY(" + ny[index] + "deg)"
            y.style.webkitTransform="rotateY(" + ny[index] + "deg)"
            y.style.OTransform="rotateY(" + ny[index] + "deg)"
            y.style.MozTransform="rotateY(" + ny[index] + "deg)"
            if (ny[index]==180 || ny[index] == 360){
                clearInterval(rotYINT)
                if (ny[index]>=360){ny[index]=0}
            }
        }
        function ToggleVoca(c){
            //Rotate
            var th =$('#Voca' + c);        
            index = parseInt(c);
            rotateYDIV(c);
            if (play[index]){
                play[index]=false;
                document.getElementById('audio'+c).play();
            }
            else play[index] =true;

        }

    </script>
</head>
<body>
        <?php getHeader(); ?>
        <div class="formVoca">
            <?php 
                //get current level + name of topic
                $email = $_SESSION['email'];
                $query = "select * from score where email = '$email'";
                $result = $conn ->query($query);
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $level = $row['levelListening'];
                        $levelFT = $row['levelFT'];
                    }
                }
                //get name of topic:
                $query = "select * from levellistening where level_FT = '$levelFT' and level = '$level'";
                $result = $conn ->query($query);
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $nameOfTopic = $row['name'];
                    }
                }
            ?>
            <div class="topic" style="text-align: left;font-size: 25px; color: red;margin-bottom: 20px;font-family: 'Montserrat', sans-serif;">Topic: <?php echo $nameOfTopic; ?></div>
            <?php 
			//check max level
			if ($level > 5){
				echo "<script>window.alert('You level is max !');</script>";
				echo "<script>window.location.replace('/')</script>";
			}
            //get Data of lesson
            $query = "select * from listening where levelFT = '$levelFT' and level = '$level'";
                $result = $conn ->query($query);
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <div id="Voca<?php echo $row['id'];?>" class="Voca" onclick="ToggleVoca('<?php echo $row['id'];?>');">
                            <div class="front first">
                                <i class="fa fa-volume-up"></i>
                                <h4><?php echo $row['word'];?></h4>
                            </div>
                            <div class="behind">
                                <i class="fa fa-volume-up"></i>
								<h4><?php echo $row['mean'];?></h4>
                            </div>
                        </div>
                        <audio id ="audio<?php echo $row['id'];?>">
                            <source src="<?php echo $row['url'];?>" type="audio/mpeg">
                        </audio>
                        <?php
                    }
                }
            ?>
        </div>
        <a class="goToTest" href="/Pre-Listening.php">Go to Test</a>
    </div>
    <?php getFooter(); ?>
</body>
</html>
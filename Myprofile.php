<?php
require_once('./config.php');
require_once('./CommonFunc.php');
require_once('./Content.php');
session_start();
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
	<style>
		.botcontent p{
			font-family: 'Montserrat', sans-serif;
			font-size:18px;
		}
		.header{
			min-height:650px !important;
		}
		i {
			font-size: 18px;
		}
		.hidden{
            display: none;
        }
        .hidden.showDetail{

            display: block;
        }
	</style>
	<script>
		$(document).ready(function() {
           $('#Score_Voca').on('click',function(){
                $('#Voca_detail').toggleClass('showDetail');
				$('#Score_Voca').text( $('#Score_Voca').text() === '+' ? '-' : '+');
            });
			 $('#Score_Listen').on('click',function(){
                $('#Listen_detail').toggleClass('showDetail');
				$('#Score_Listen').text( $('#Score_Listen').text() === '+' ? '-' : '+');
            });
			$('#Score_Gram').on('click', function(){
				$('#Grammar_detail').toggleClass('showDetail');
				$('#Score_Gram').text($('#Score_Gram').text() === '+' ? '-' : '+');
			});
		});
	</script>
</head>
<body>
<!-- header bar -->
<?php getHeader(); ?>

    <!-- end header bar -->
    <!-- profile of user -->
    <div class="content">
        <div class="botcontent">
            <h2 style="text-align: left;font-size: 30px; color: red;margin-bottom: 20px;font-family: 'Montserrat', sans-serif;">My Profile:</h2>
        <?php
            echo "<p><b>Email:</b> ".$_SESSION['email']."</p>";
            echo "<p><b>Name:</b> ".$_SESSION['name']."</p>";
            $email = $_SESSION['email'];
            $sql = "SELECT scoreFT FROM score where email = '$email'";
            $result = $conn ->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            }
            $sql = "SELECT * FROM score where email = '$email'";
            $result = $conn ->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            }
			if (isset($row['levelFT'])){
				echo "<p><b>Your current level:</b> ".$row['levelFT']."</p>";
				echo "<p><b>Your current vocabulary level:</b> ".$row['levelVocabulary']."  <span style=' padding:1px 3px;background-color:#d29191;border-radius: 10%;cursor: pointer;' id='Score_Voca'>+</span></p>";
				$query = "select * from scorevocabularytest where email = '$email'";
				$result = $conn ->query($query);
				if ($result->num_rows > 0) {
					echo '<div id="Voca_detail" class="hidden">';
						while($row1 = $result->fetch_assoc()) {
							if (isset($row1['level1'])) 
								echo "<i>Level 1: ". $row1['level1']."/5</i>";
							if (isset($row1['level2'])) 
								echo "<i>Level 2: ". $row1['level2']."/5</i>";
							if (isset($row1['level3'])) 
								echo "<i>Level 3: ". $row1['level3']."/5</i>";
							if (isset($row1['level4'])) 
								echo "<i>Level 4: ". $row1['level4']."/5</i>";
							if (isset($row1['level5'])) 
								echo "<i>Level 5: ". $row1['level5']."/5</i>";
						}
					echo '</div>';
				}
				echo "<p><b>Your current grammar level:</b> ".$row['levelGrammar']."  <span style=' padding:1px 3px;background-color:#d29191;border-radius: 10%;cursor: pointer;' id='Score_Gram'>+</span></p>";
				$query = "SELECT * FROM scoregrammartest WHERE email = '$email'";
				$result = $conn->query($query);
				if($result->num_rows >0) {
					echo '<div id="Grammar_detail" class="hidden">';
						while($row2 = $result->fetch_assoc()) {
							if (isset($row2['level'])) 
								echo "<i>Test: ".$row2['sub_id']." Level: ". $row2['level']." Score: ".$row2['score']."/10</i><br>";
						}
					echo '</div>';
				}
				echo "<p><b>Your current listening level:</b> ".$row['levelListening']."  <span style=' padding:1px 3px;background-color:#d29191;border-radius: 10%;cursor: pointer;' id='Score_Listen'>+</span></p>";
				$query = "select * from scorelisteningtest where email = '$email'";
				$result = $conn ->query($query);
				if ($result->num_rows > 0) {
					echo '<div id="Listen_detail" class="hidden">';
						while($row3 = $result->fetch_assoc()) {
							if (isset($row3['level1'])) 
								echo "<i>Level 1: ". $row3['level1']."/5</i>";
							if (isset($row3['level2'])) 
								echo "<i>Level 2: ". $row3['level2']."/5</i>";
							if (isset($row3['level3'])) 
								echo "<i>Level 3: ". $row3['level3']."/5</i>";
							if (isset($row3['level4'])) 
								echo "<i>Level 4: ". $row3['level4']."/5</i>";
							if (isset($row3['level5'])) 
								echo "<i>Level 5: ". $row3['level5']."/5</i>";
						}
					echo '</div>';
				}
			}
			//check if complete all lesson + level: Beginer -> Do a test to up level
			$query = "SELECT * FROM score where email = '$email' and levelFT = 'Beginer' and levelVocabulary > 5 and levelListening > 5 and levelGrammar > 6";
			$result = $conn ->query($query);
			if ($result->num_rows > 0) {
				echo "<p style='color:red;'><b>You are learn all lesson and pass all the test!</b></p>";
				echo "<p style='color:#ac5454;'><b>Do the test to increase your level</b></p>";
				echo "<form method='POST' action = '/Up-LevelTest.php'>";
				echo "<input type='submit' name ='submit' value='Submit'/>";
				echo "</form>";
			}
        ?>
		</div>
    </div>
    <img src="4.png" alt="">
</div>
<?php getFooter(); ?>

</body>
</html>

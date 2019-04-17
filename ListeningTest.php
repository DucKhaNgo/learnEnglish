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
    <title>Vocabulary</title>
    <link rel="stylesheet" href="/webAnimation.css">
    <link rel="icon" href="img/turtle.jpeg">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<style>
		.header{
			min-height:600px !important;
		}
	</style>
   <script>
        $(document).ready(function() {
			$('input[value="Next"]').on('click',function(){
				$('#'+id).css('display','none');
				id++;
				if (id > 5) $('input#submit').click();
				$('#'+id).css('display','block');
			})
			$(".TestForm").not("#1").css('display','none');
			$flag = [0,0,0,0,0,0];
			$('i.fa-volume-up').on('click',function(){
				var id = $(this).attr('id');
				id = id.replace("item","");
				if ($flag[id] <= 3){
					document.getElementById("audio"+id).play();
				}
				$flag[id]++;
			});
        });
		var count = 0,IN,id = 1;
		
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
</head>
<body>
	<?php getHeader();?>
	<?php
		//get levelFT + level of user
		$email = $_SESSION['email'];
		$query =  "Select * from score where email = '$email'";
		$result = $conn ->query($query);
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$level = $row['levelListening'];
				$levelFT = $row['levelFT'];
			}
			//check max level
			if ($level > 5){
				echo "<script>window.alert('You level is max !');</script>";
				echo "<script>window.location.replace('/')</script>";
			}
		}
		else header("Location: /");
	?>
	<div>
		<form method ="POST" action="/after-ListeningTest.php" class="wrapForm">
		<input type="hidden" name ="level" value="<?php echo $level; ?>">
		<input type="hidden" name ="levelFT" value="<?php echo $levelFT; ?>">
		<?php 
			$query = "Select * from listeningtest where levelFT = '$levelFT' and level = '$level'";
			$result = $conn ->query($query);
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) { ?>
					<div class="TestForm" id="<?php echo $row['id']; ?>" onmousedown='return false;' onselectstart='return false;'>
                        <i class="fa fa-volume-up" style="position:initial;display:block;margin-left:30px;margin-bottom:20px;cursor: pointer;" id = "item<?php echo $row['id'];?>"></i>
						<audio id ="audio<?php echo $row['id'];?>">
                            <source src="<?php echo $row['url'];?>" type="audio/mpeg">
                        </audio>
						<input type="radio" value="A" name="<?php echo $row['id'];?>"> <?php echo $row['answerA']; ?><br>
						<input type="radio" value="B" name="<?php echo $row['id'];?>"> <?php echo $row['answerB']; ?><br>
						<input type="radio" value="C" name="<?php echo $row['id'];?>"> <?php echo $row['answerC']; ?><br>
						<input type="radio" value="D" name="<?php echo $row['id'];?>"> <?php echo $row['answerD']; ?><br>
						<input type="radio" value="Empty" name=<?php echo $row['id'];?> checked="" style="display:none;">
						<input type ="button" value="Next" id="Next<?php echo $row['id'];?>" class="Next">
					</div>
					<?php 
				}
		}
		?>
			<input type="submit" name="btn-submit" id ="submit" style="display:none;">
		</form>
	</div>
	</div>
	<?php getFooter();?>
</body>
</html>
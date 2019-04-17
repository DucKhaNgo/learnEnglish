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
				clearInterval(INT);
				count = 0;
				INT = setInterval(countDown,1000);
			})
			$(".TestForm").not("#1").css('display','none');
			INT = setInterval(countDown,1000);
        });
		var count = 0,IN,id = 1;
		function countDown(){
			count++;
			$(".clock p").text('00:0'+count);
			if (count >=5 ){
				count= 0; 
				clearInterval(INT);
				$('#Next'+id).click();
			}
		}
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
				$level = $row['levelVocabulary'];
				$levelFT = $row['levelFT'];
			}
		}
		else header("Location: /");
	?>
	<div>
       <div class="clock">
			<p>00:00</p>
		</div>
		<form method ="POST" action="/after-VocabularyTest.php" class="wrapForm">
		<input type="hidden" name ="level" value="<?php echo $level; ?>">
		<input type="hidden" name ="levelFT" value="<?php echo $levelFT; ?>">
		<?php 
			$query = "Select * from vocabularytest where levelFT = '$levelFT' and level = '$level'";
			$result = $conn ->query($query);
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) { ?>
					<div class="TestForm" id="<?php echo $row['id']; ?>" onmousedown='return false;' onselectstart='return false;'>
						<h4><?php echo $row['id'].". ".$row['questionName']; ?></h4>
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
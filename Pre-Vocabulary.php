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
    <title>English Proficiency Test</title>
    <link rel="stylesheet" href="/webAnimation.css">
    <link rel="icon" href="img/turtle.jpeg">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <script>
        $(document).ready(function() {
            // if login -> change name+ href of login : Profile
            var str = $("#status").text();
            if (str.trim() !== "")
                $("#login").text("My Profile").attr("href", "/profile");
        })
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
    <style>
    .header{
        min-height: 700px !important;
    }
    </style>
</head>
<body>
<?php getHeader();?>
    <!-- end header bar -->
    <!-- CONTENT -->
    <!-- Test -->
    <div class="content" style='width:80%; margin:unset'>
       <h2 style="text-align: center;font-size: 30px; color: red;margin-bottom: 20px;font-family: 'Montserrat', sans-serif;">Vocabulary Test</h2>
       <p class="prepare">Hello <?php echo $_SESSION['name']; ?></p>
       <p class="prepare">You have 5 second to choice the answer</p>
       <p class="prepare">Thank you for your attention!</p>
       <a class="prepare" href="/VocabularyTest.php">Join it</a>

    </div>
    <!-- END CONTENT -->
</div>
<?php getFooter(); ?>
</body>
</html>
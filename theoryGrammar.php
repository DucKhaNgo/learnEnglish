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
    <style>
        .header{
            min-height: 700px !important;
        }
        input[type="submit"] {
            padding: 7px 15px;
            margin-left: 183px;
            border: none;
            border-radius: 8%;
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
<!-- header bar -->
<?php getHeader(); ?>

    <!-- end header bar -->
    <!-- CONTENT -->
    <!-- Test -->
    <div class="content">
        <div style="margin-top:20px">
        <div class="sentence" style=" margin-left: 220px;"><a href='mdqh.php'>Relative Clause</a></div>
        <div class="sentence" style=" margin-left: 220px;" ><a href='rutgonmdqh.php'>Reduced Relative Clause</a></div>
        <div class="sentence" style=" margin-left: 220px;"><a href='cauDieuKien.php'>Conditional Sentence</a></div>
        <div class="sentence" style=" margin-left: 220px;"><a href='cauDieuuoc.php'>Wish Sentences</a></div>
        <div class="sentence" style=" margin-left: 220px;"><a href='cauBidong.php'>Passive Voice</a></div>
        <div class="sentence" style=" margin-left: 220px;"><a href='Vietlaicau.php'>Rewrite The Sentences</a></div>
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<?php getFooter(); ?>

</body>
</html>

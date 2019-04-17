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
            margin-left: 220px;
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
        <form action='GrammarTest.php' method='GET'>
        <input type="hidden" name='test' value='1'>
        <input class="sentence" style="color:#a9ff00" type='submit' value='Relative Clause'>
        </form>
        <form action='GrammarTest.php' method='GET'>
        <input type="hidden" name='test' value='2'>
        <input class="sentence" style="color:#a9ff00" type='submit' value='Reduced Relative Clause'>
        </form>
        <form action='GrammarTest.php' method='GET'>
        <input type="hidden" name='test' value='3'>
        <input class="sentence" style="color:#a9ff00" type='submit' value='Conditional Sentence'>
        </form>
        <form action='GrammarTest.php' method='GET'>
        <input type="hidden" name='test' value='4'>
        <input class="sentence" style="color:#a9ff00" type='submit' value='Wish Sentences'>
        </form>
        <form action='GrammarTest.php' method='GET'>
        <input type="hidden" name='test' value='5'>
        <input class="sentence" style="color:#a9ff00" type='submit' value='Passive Voice'>
        </form>
        <form action='GrammarTest.php' method='GET'>
        <input type="hidden" name='test' value='6'>
        <input class="sentence" style="color:#a9ff00" type='submit' value='Rewrite The Sentences'>
        </form>
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<?php getFooter(); ?>

</body>
</html>

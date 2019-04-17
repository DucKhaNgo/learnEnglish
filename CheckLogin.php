<?php
    require_once ('./config.php');
    require_once  ('./CommonFunc.php');
    
?>
<?php

    if (isset($_POST['email'])) {
        if (empty($_POST['email'])) {
            echo "email is empty";
        } else {
            $email = $_POST['email'];
            if (!checkEmail($email)) {
                echo "email not correct";
            } else {
                $sql = "SELECT email FROM users WHERE email = '$email'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "email has already existed";
                }
                else {
                    echo "true";
                }
            }
        }
    }



?>
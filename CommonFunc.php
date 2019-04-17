<?php
require_once('config.php');

?>
<?php

?>
<?php
/**clear input from user
 * @param $data
 * @return string
 */
function clear_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
/** Check validate form mail
 * @param $email
 * @return bool
 */
 function checkEmail($email)
{
    if (empty($email)) return false;
    if (!preg_match("/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD", $email)) {
        return false;
    }
    return true;
}

/**check exist email in DB
 * @param $email
 * @return bool
 */
function checkExistEmail($email)
{
    global $conn;
    $sql = "SELECT email FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows >0) {
        return true;
    }
    return false;
}

/** check input and return error
 * @param $email
 * @param $name
 * @param $password
 * @param $passrepeat
 * @return array
 */
function checkInput($email, $name, $password, $passrepeat)
{
    $errlog = array();
    // check input and push error to array
    if(!checkEmail($email)) {
        array_push($errlog, "please input correct email");
    } else if (checkExistEmail($email)) {
        array_push($errlog,"Email has already existed, please input another email");
    }
    if (empty($name)) {
        array_push($errlog,"please input name");
    }
    if (empty($password)) {
        array_push($errlog, "please input password");
    } else if ($password != $passrepeat) {
        array_push($errlog,"Password repeat not correct");
    }
    return $errlog;
}

function checkAuth(){
    if(!isset($_SESSION['email'])) 
        header('Location: /login.php');
}
function checkFirstTest() {
    global $conn;
        //Check exist in score
    if(isset($_SESSION['email'])) { 
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM score WHERE email='$email' AND scoreFT is not null";
        $result = $conn->query($sql);
        if($result->num_rows == 0) {
           header('location: /prefirstTest.php');
        }
    
    }
}
?>
<?php
//Connect DB
$servername = "localhost";
$username = "root";
$dbname = "learnenglish";
$conn = mysqli_connect($servername,$username,'',$dbname);
$conn->set_charset("utf8");
//check connect to DB
if(!$conn) {
	die("connection failed:". mysqli_connect_error());
}
?>
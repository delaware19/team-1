<?php

$servername = "127.0.0.1";
$username = "frodo";
$password = "";
$dbname = "nemours";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// or die("Unable to connect to MySQL");
else {
    echo "Connected to MySQL<br>";
}

$mysqli = new mysqli($servername, $username, $password, $dbname) or die($mysqli->connect_error);
$table = 'image';
//$conn = mysql_connect("localhost","root","");

?>

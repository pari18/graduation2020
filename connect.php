<?php
$servername = "localhost";
$username="root";
$dbname="erpsys";
$pwd="";

$conn = mysqli_connect($servername, $username, $pwd, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>
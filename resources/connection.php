<?php
// connection file to local DB
$servername = "localhost";
$username = "root";
$password = "";

// $hostname = "omoore94.animerooms.com";
// $username = "omoore94";
// $password = "!Deandre94";
// $database = "omoore94_animerooms";

$conn = mysqli_connect($servername, $username, $password);

// $conn = mysqli_connect($hostname, $username, $password, $database);
if($conn == true){
    // echo "Connected";
}
?>
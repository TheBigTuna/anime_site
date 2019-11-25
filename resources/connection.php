<?php
// connection file to local DB
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if($conn == true){
    echo "Connected";
}
?>
<?php
    session_start();
    include('../resources/connection.php');

    print_r($_POST);
    $InsertPost = "SELECT * FROM omoore94_animerooms.cmstags";  
    $QueryParms = array();      
    $InsertPostResult = mysqli_query($conn, $InsertPost);
?>
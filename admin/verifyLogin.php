<?php
    session_start();
    include('../resources/connection.php');

    $VerifyAdminUser = "SELECT * FROM omoore94_animerooms.admincredentials";        
    $VerifyAdminUserResult = mysqli_query($conn, $VerifyAdminUser);
    while($row = mysqli_fetch_assoc($VerifyAdminUserResult)){
        if($_POST['adminUser'] == $row['User']){
            $Passwords = $row['Password'];
        }
    }

    if($_POST['adminLogin'] === $Passwords){
        $_SESSION['IsAdmin'] = true;
        header('Location: /anime_site/admin/main.php');
    }
    else{
        header('Location:' . $_SERVER['HTTP_REFERER']);
    }
?> 
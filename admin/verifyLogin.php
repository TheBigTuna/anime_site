<?php
    session_start();
    include('passwords.php');

    for($i=0; $i < count($Passwords); $i++){;
        if($_POST['adminLogin'] === $Passwords[$i]){
            $_SESSION['IsAdmin'] = true;
            header('Location: /anime_site/admin/main.php');
        }
        else{
            header('Location:' . $_SERVER['HTTP_REFERER']);
        }
    }
?> 
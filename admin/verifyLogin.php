<?php
    session_start();

    if($_POST['adminLogin'] == '!Deandre94'){
        $_SESSION['IsAdmin'] = true;
        header('Location: /anime_site/admin/main.php');
    }
    else{
        header('Location:' . $_SERVER['HTTP_REFERER']);
    }
?>
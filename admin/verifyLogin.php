<?php
    session_start();
    
    if($_POST['adminLogin'] == '!Deandre94'){
        $_SESSION['IsAdmin'] = true;
    }
    header('Location: /anime_site/index.php');
?>
<?php
    function verifyAdmin(){
        if(!isset($_SESSION['IsAdmin'])){
            header('Location: /anime_site/index.php');
        }
    }
?>
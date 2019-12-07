<?php
// Function to verify admins 
    function verifyAdmin(){
        if(!isset($_SESSION['IsAdmin'])){
            header('Location: /anime_site/index.php');
        }
    }

    function fetchCurrentPage(){
        echo $_SERVER['REQUEST_URI'];
        echo "<br>";
        if(strpos($_SERVER['REQUEST_URI'],"/index.php")){
            echo "1";
            $_SESSION['CurrentPage'] = "Home";
        }
        else if(strpos($_SERVER['REQUEST_URI'],"/lifestyle.php")){
            echo "2";
            $_SESSION['CurrentPage'] = "Lifestyle";
        }
        else if(strpos($_SERVER['REQUEST_URI'],"/admin/")){
            echo "3";
            $_SESSION['CurrentPage'] = "Admin";
        }
        else if(strpos($_SERVER['REQUEST_URI'],"/contact.php")){
            echo "4";
            $_SESSION['CurrentPage'] = "Contact";
        }
        else if(strpos($_SERVER['REQUEST_URI'],"/anime.php")){
            echo "4";
            $_SESSION['CurrentPage'] = "Anime";
        }
    }
?>
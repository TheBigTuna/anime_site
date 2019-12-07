<?php
// This page hold any information needed for the current page

// Depending on the page apply the appropiate title
if(strpos($_SERVER['REQUEST_URI'],"/index.php")){
    $_SESSION['CurrentPage'] = "Home";
}
else if(strpos($_SERVER['REQUEST_URI'],"/lifestyle.php")){
    $_SESSION['CurrentPage'] = "Lifestyle";
}
else if(strpos($_SERVER['REQUEST_URI'],"/admin/")){
    $_SESSION['CurrentPage'] = "Admin";
}
else if(strpos($_SERVER['REQUEST_URI'],"/contact.php")){
    $_SESSION['CurrentPage'] = "Contact";
}
else if(strpos($_SERVER['REQUEST_URI'],"/anime.php")){
    $_SESSION['CurrentPage'] = "Anime";
}

?>
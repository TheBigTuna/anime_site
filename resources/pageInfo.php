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
else if(strpos($_SERVER['REQUEST_URI'],"/manga.php")){
    $_SESSION['CurrentPage'] = "Manga";
}
else if(strpos($_SERVER['REQUEST_URI'],"/about.php")){
    $_SESSION['CurrentPage'] = "About";
}
else if(strpos($_SERVER['REQUEST_URI'],"/article.php")){
    $_SESSION['CurrentPage'] = "Article";
}

// If recent articles have not been stored create a recent articles variable and store the five most recent articles
if(!isset($_SESSION['RecentArticles'])){
    $_SESSION['RecentArticles'] = array();
    // Query to fetch currently available articles
    $FetchArticles = "SELECT * FROM omoore94_animerooms.cmsarticles AS A INNER JOIN omoore94_animerooms.cmsarticlesinfo AS AI ON AI.ID = A.ID ORDER BY A.ID DESC LIMIT 10";        
    $FetchArticlesResult = mysqli_query($conn, $FetchArticles);
    while($row = mysqli_fetch_assoc($FetchArticlesResult)){
        array_push($_SESSION['RecentArticles'], $row);
    }
}

function createSlug($Url,$Var){
    if(strpos($_SERVER['REQUEST_URI'],"/article.php")){
        $Url = strtolower($Url);
        $Url = substr($Url, 0, strrpos($Url, '?'));
        $Url .= "/Article";
        $Url .= "/" . $Var['ID'];
        $Url .= "/" . $Var['Title'];
        $Url = str_replace("_", "-", $Url);
        $Url = str_replace("#", "", $Url);
        $Url = str_replace("+", "", $Url);
        $Url = str_replace(">", "", $Url);
        $Url = str_replace("<", "", $Url);
        $Url = str_replace("(", "", $Url);
        $Url = str_replace(")", "", $Url);
        $Url = str_replace("=", "", $Url); 
        $Url = str_replace(" ", "-", $Url);
    }
    return $Url;
} 
$_SERVER['REQUEST_URI'] = createSlug($_SERVER['REQUEST_URI'],$_GET);
// echo $_SERVER['REQUEST_URI'];
?>
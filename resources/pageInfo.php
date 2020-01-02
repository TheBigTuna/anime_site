<?php
// This page hold any information needed for the current page

// Depending on the page apply the appropiate title
if(strpos($_SERVER['REQUEST_URI'],"/admin") > -1){
    $_SESSION['CurrentPage'] = "Admin - animerooms.com";
    $_SESSION['Description'] = "Hello animerooms is a blog dedicated to the love of anime.";
    if(strpos($_SERVER['REQUEST_URI'],"index.php") == False){
        verifyAdmin();
    }
}
else if(strpos($_SERVER['REQUEST_URI'],"/index.php")){
    $_SESSION['CurrentPage'] = "Home - animerooms.com";
    $_SESSION['Description'] = "Hello animerooms is a blog dedicated to the love of anime.";
}
else if(strpos($_SERVER['REQUEST_URI'],"/lifestyle.php")){
    $_SESSION['CurrentPage'] = "Lifestyle - animerooms.com";
    $_SESSION['Description'] = "Hello animerooms is a blog dedicated to the love of anime.";
}
else if(strpos($_SERVER['REQUEST_URI'],"/contact.php")){
    $_SESSION['CurrentPage'] = "Contact - animerooms.com";
    $_SESSION['Description'] = "Hello animerooms is a blog dedicated to the love of anime.";
}
else if(strpos($_SERVER['REQUEST_URI'],"/anime.php")){
    $_SESSION['CurrentPage'] = "Anime - animerooms.com";
    $_SESSION['Description'] = "Hello animerooms is a blog dedicated to the love of anime.";
}
else if(strpos($_SERVER['REQUEST_URI'],"/manga.php")){
    $_SESSION['CurrentPage'] = "Manga - animerooms.com";
    $_SESSION['Description'] = "Hello animerooms is a blog dedicated to the love of anime.";
}
else if(strpos($_SERVER['REQUEST_URI'],"/about.php")){
    $_SESSION['CurrentPage'] = "About - animerooms.com";
    $_SESSION['Description'] = "Hello animerooms is a blog dedicated to the love of anime.";
}
else if(strpos($_SERVER['REQUEST_URI'],"/news.php")){
    $_SESSION['CurrentPage'] = "News - animerooms.com";
    $_SESSION['Description'] = "Hello animerooms is a blog dedicated to the love of anime.";
}
else if(strpos($_SERVER['REQUEST_URI'],"/article.php") > -1){
    // Query to fetch currently available articles
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    $FetchArticles = "SELECT * FROM omoore94_animerooms.cmsarticles AS A INNER JOIN omoore94_animerooms.cmsarticlesinfo AS AI ON AI.ID = A.ID WHERE A.ID = $ID ORDER BY A.ID DESC";
    $FetchArticlesResult = mysqli_query($conn, $FetchArticles);
    $ArticleRow = array();
    while($row = mysqli_fetch_assoc($FetchArticlesResult)){
        array_push($ArticleRow, $row);
    }
    $_SESSION['CurrentPage'] = $ArticleRow[0]['ArticleName'];
    $_SESSION['CurrentSubtitle'] = $ArticleRow[0]['ArticleSubTitle'];
    $_SESSION['Description'] = $ArticleRow[0]['ArticleSubTitle'];
    $_SESSION['ArticleAuthor'] = $ArticleRow[0]['User'];
    $ImageArray = array($ArticleRow[0]['Img1'], $ArticleRow[0]['Img2'], $ArticleRow[0]['Img3'],$ArticleRow[0]['Img4'],$ArticleRow[0]['Img5']);
}
else{
    $_SESSION['CurrentPage'] = "animerooms.com";
    $_SESSION['Description'] = "Hello animerooms is a blog dedicated to the love of anime.";
}

// If recent articles have not been stored create a recent articles variable and store the five most recent articles
// unset($_SESSION['RecentArticles']);
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
    $Url = str_replace("/anime_site", "", $Url);
    $Url = strtolower($Url);
    // if(strpos($_SERVER['REQUEST_URI'],"/article.php")){
    //     $Url = substr($Url, 0, strrpos($Url, '?'));
    //     $Url .= "/Article";
    //     $Url .= "/" . $Var['ID'];
    //     $Url .= "/" . $Var['Title'];
    //     $Url = str_replace("_", "-", $Url);
    //     $Url = str_replace("#", "", $Url);
    //     $Url = str_replace("+", "", $Url);
    //     $Url = str_replace(">", "", $Url);
    //     $Url = str_replace("<", "", $Url);
    //     $Url = str_replace("(", "", $Url);
    //     $Url = str_replace(")", "", $Url);
    //     $Url = str_replace("=", "", $Url); 
    //     $Url = str_replace(" ", "-", $Url);
    // }
    // return $Url;





    
    $Slug = array();
    array_push($Slug,$Url);
    array_push($Slug,$Var['ID']);
    array_push($Slug,$Var['Title']);

    return $Slug;
} 

// echo http_build_query(createSlug($_SERVER['REQUEST_URI'],$_GET));
// $Slug = createSlug($_SERVER['REQUEST_URI'],$_GET);
// http_build_query($Slug);
?>
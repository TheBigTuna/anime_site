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
else if(strpos($_SERVER['REQUEST_URI'],"/article.php")){
    // Query to fetch currently The selected articles Title
    $FetchArticleTitle = "SELECT ArticleName, ArticleSubTitle, User FROM omoore94_animerooms.cmsarticles AS A INNER JOIN omoore94_animerooms.cmsarticlesinfo AS AI ON AI.ID = A.ID WHERE AI.ID = 4 ORDER BY A.ID DESC";        
    $FetchArticleTitleResult = mysqli_query($conn, $FetchArticleTitle);
    while($row = mysqli_fetch_assoc($FetchArticleTitleResult)){
        // Grabs the title of the article
        $_SESSION['CurrentPage'] = $row['ArticleName'];
        $_SESSION['CurrentSubtitle'] = $row['ArticleSubTitle'];
        $_SESSION['ArticleAuthor'] = $row['User'];
    }
}

if(!isset($_SESSION['RecentArticles'])){
    $_SESSION['RecentArticles'] = array();
    // Query to fetch currently available articles
    $FetchArticles = "SELECT * FROM omoore94_animerooms.cmsarticles AS A INNER JOIN omoore94_animerooms.cmsarticlesinfo AS AI ON AI.ID = A.ID ORDER BY A.ID DESC LIMIT 5";        
    $FetchArticlesResult = mysqli_query($conn, $FetchArticles);
    while($row = mysqli_fetch_assoc($FetchArticlesResult)){
        array_push($_SESSION['RecentArticles'], $row);
    }
}
?>
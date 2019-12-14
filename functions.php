<?php
// Function to verify admins 
    function verifyAdmin(){
        if(!isset($_SESSION['IsAdmin'])){
            header('Location: /anime_site/index.php');
        }
    }

    function splitArticle($Article, $Type, $Images){
        // $Article = substr_replace($Article, "<span style='font-size:16px; font-weight: 600;'>....</span><a href='/anime_site/article.php?ID=" . $Article . "'><span style='font-size:13px; color: #1bb1dc;'> Read More </span></a>", 250);
        // Creates break tags in between paragraphs
        $Article = str_replace( "\n", '<br />' . str_repeat('&nbsp;', 5), $Article);
        // Adds indentation for new paragraphs
        $Article = str_replace( "\n", str_repeat('&nbsp;', 5), $Article);
        
        switch ($Type){
            case "1":
                if(strpos($Article, "!Image2!") == true){
                    $Article = str_replace( "!Image2!", "<img src='images/" . $Images[1] . "'style='height: 280px; width: 60%; object-fit: cover;'>", $Article);
                }
                if(strpos($Article, "!Image3!") == true){
                    $Article = str_replace( "!Image3!", "<img src='images/" . $Images[2] . "'style='height: 250px; width: 120px; float: right; object-fit: cover;'>", $Article);
                }
                if(strpos($Article, "!Image4!") == true){
                    $Article = str_replace( "!Image4!", "<img src='images/" . $Images[2] . "'style='height: 200px; width: 80%; display: block; margin: 0 auto; object-fit: cover;'>", $Article);
                }
                break;
            case "2":
                break;
            case "3":
                break;
            case "4":
                break;
            case "5":
                break;
            case "6":
                break;
        }

        echo $Article;
        // return $Article;
    }
?>
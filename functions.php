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
                echo "Your favorite color is red!";
                break;
            case "2":
                echo "Your favorite color is blue!";
                break;
            case "3":
                echo "Your favorite color is green!";
                break;
            case "4":
                echo "Your favorite color is green!";
                break;
            case "5":
                echo "Your favorite color is green!";
                break;
            case "6":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }

        echo $Article;
        // return $Article;
    }
?>
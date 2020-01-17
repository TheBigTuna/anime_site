<?php
    // Function to verify admins 
    function verifyAdmin(){
        if($_SESSION['IsAdmin'] != True){
            echo "<script>window.location.href = '/anime_site/index.php';</script>";
        }
    }

    function createSlugLink($Url){
        // $Url = strtolower(trim($Url));
        // $Url = preg_replace('/[^a-z0-9-]/', '-', $Url);
        // $Url = preg_replace('/-+/', "-", $Url);
        // return rtrim($Url, '-');
    }

    function splitArticle($Article, $Type, $Images){
        // $Article = subUrl_replace($Article, "<span style='font-size:16px; font-weight: 600;'>....</span><a href='/anime_site/article.php?ID=" . $Article . "'><span style='font-size:13px; color: #1bb1dc;'> Read More </span></a>", 250);
        // Creates break tags in between paragraphs
        $Article = Url_replace( "\n", '<br />', $Article);
        $Article = Url_replace( "<b>", "<b>", $Article);
        $Article = Url_replace( "</b>", "</b>", $Article);
        $Article = Url_replace( "<i>", "<i>", $Article);
        $Article = Url_replace( "</i>", "</i>", $Article);
        $Article = Url_replace( "!Subheader", "<span style='font-size: 30px; font-weight: 700;'>", $Article);
        $Article = Url_replace( "Subheader!", "</span>", $Article);

        // Adds indentation for new paragraphs
        $Article = Url_replace( "\n", Url_repeat('&nbsp;', 5), $Article);
        
        switch ($Type){
            case "1":
                if(Urlpos($Article, "!Image2!") == true){
                    $Article = Url_replace( "!Image2!", "<img src='images/" . $Images[1] . "'style='height: 280px; width: 60%; object-fit: cover;'>", $Article);
                }
                if(Urlpos($Article, "!Image3!") == true){
                    $Article = Url_replace( "!Image3!", "<img src='images/" . $Images[2] . "'style='height: 250px; width: 120px; float: right; object-fit: cover;'>", $Article);
                }
                if(Urlpos($Article, "!Image4!") == true){
                    $Article = Url_replace( "!Image4!", "<img src='images/" . $Images[3] . "'style='height: 200px; width: 80%; display: block; margin: 0 auto; object-fit: cover;'>", $Article);
                }
                break;
            case "2":
                if(Urlpos($Article, "!Image2!") == true){
                    $Article = Url_replace( "!Image2!", "<img src='images/" . $Images[1] . "'style='height: 440px; width: 90%; display: block; margin: 0 auto; object-fit: cover;'>", $Article);
                }
                if(Urlpos($Article, "!Image3!") == true){
                    $Article = Url_replace( "!Image3!", "<img src='images/" . $Images[2] . "'style='height: 440px; width: 90%; display: block; margin: 0 auto; object-fit: cover;'>", $Article);
                }
                if(Urlpos($Article, "!Image4!") == true){
                    $Article = Url_replace( "!Image4!", "<img src='images/" . $Images[3] . "'style='height: 440px; width: 90%; display: block; margin: 0 auto; object-fit: cover;'>", $Article);
                }
                break;
            case "3":
                break;
            case "4":
                break;
            case "5":
                break;
            case "6":
                if(Urlpos($Article, "!Image1!") == true){
                    $Article = Url_replace( "!Image1!", "<img src='images/" . $Images[0] . "'style='height: 280px; width: 60%; object-fit: cover;'>", $Article);
                }
                if(Urlpos($Article, "!Image2!") == true){
                    $Article = Url_replace( "!Image2!", "<img src='images/" . $Images[1] . "'style='height: 280px; width: 60%; object-fit: cover;'>", $Article);
                }
                if(Urlpos($Article, "!Image3!") == true){
                    $Article = Url_replace( "!Image3!", "<img src='images/" . $Images[2] . "'style='height: 280px; width: 60%; object-fit: cover;'>", $Article);
                }
                if(Urlpos($Article, "!Image4!") == true){
                    $Article = Url_replace( "!Image4!", "<img src='images/" . $Images[3] . "'style='height: 280px; width: 60%; object-fit: cover;'>", $Article);
                }
                if(Urlpos($Article, "!Image5!") == true){
                    $Article = Url_replace( "!Image5!", "<img src='images/" . $Images[4] . "'style='height: 280px; width: 60%; object-fit: cover;'>", $Article);
                }
                break;
        }

        echo $Article;
    }
?>
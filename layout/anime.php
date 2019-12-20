<?php
 include('../navbar.php');
?>

<div class="row">
    <div class="container">
        <div class="ArticlePreviewBG">
        <?php
            $FetchArticles = "SELECT * FROM omoore94_animerooms.cmsarticles AS A INNER JOIN omoore94_animerooms.cmsarticlesinfo AS B ON A.ID = B.ID ORDER BY Timestamp DESC";        
            $FetchArticlesResult = mysqli_query($conn, $FetchArticles);
            $ArticleRow = array();
            while($row = mysqli_fetch_assoc($FetchArticlesResult)){
                if($row['Tag1'] == "Anime" || $row['Tag2'] == "Anime" || $row['Tag3'] == "Anime" || $row['Tag4'] == "Anime" ||  $row['Tag5'] == "Anime"){

        ?>
            <div class="ArticlePreviewCard">
                <div class="row">
                    <div class="col-sm-12 col-lg-2">
                        <div class="ArticlePreviewImgContainer">
                            <a href="/anime_site/article.php?ID=<?= $row['ID']; ?>"><img src="/anime_site/images/<?= $row['Img1']; ?>" class="ArticlePreviewImg"></a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-10">
                        <div class="ArticlePreviewContent">
                            <a href="/anime_site/article.php?ID=<?= $row['ID']; ?>&Title=<?= $row['ArticleName']; ?>"><h5 class="ArticlePreviewTitle"><?= $row['ArticleName']; ?></h5></a>
                            <!-- <h6 class="ArticlePreviewSubTitle"><?= $row['ArticleSubTitle']; ?></h6> -->
                            <?php
                                if(strlen($row['Text']) > 250){
                                    $row['Text'] = substr_replace($row['Text'], "<span style='font-size:16px; font-weight: 600;'>....</span><a href='/anime_site/article.php?ID=" . $row['ID'] . "'><span style='font-size:13px; color: #1bb1dc;'> Read More </span></a>", 250);
                                }
                            ?>
                            <p class="ArticlePreviewText"><?= $row['Text']; ?></p>
                            <p class="ArticlePreviewInfo"><?= date("F d, Y g:i A",strtotime($row['Timestamp'])); ?> by <span style="font-weight: 600;"><?= $row['User']; ?></span></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php    
            }
        }
        ?>
        <?php
            include('../footer.php');
        ?>
        </div>
    </div>
</div>

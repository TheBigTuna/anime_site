<?php
 include('navbar.php');
?>
<div class="row">
    <div class="container">
        <?php
            // Query to fetch currently available articles
            $FetchArticles = "SELECT * FROM omoore94_animerooms.cmsarticles AS A INNER JOIN omoore94_animerooms.cmsarticlesinfo AS AI ON AI.ID = A.ID WHERE A.ID = 4 ORDER BY A.ID DESC";        
            $FetchArticlesResult = mysqli_query($conn, $FetchArticles);
            while($row = mysqli_fetch_assoc($FetchArticlesResult)){
            ?>
                <div class="ArticlePageBG">
                    <!-- Article Title -->
                    <div class="ArticlePageTitleBG">
                        <h2 class="ArticlePageTitle"><?= $row['ArticleName']; ?></h2>
                    </div>
                    <!-- Article Author -->
                    <h6 class="ArticlePageAuthor">By <span style="color: #0B5AA3;"><?= $row['User']; ?></span></h6>
                    <!-- Timestamp from when the article was created -->
                    <h6 class="ArticlePageTimestamp"><?= date("F d, Y g:i A",strtotime($row['Timestamp'])); ?></h6>
                    <div id="ArticleHeaderSection">
                        <div class="row">
                            <div class="col-sm-12 col-lg-8">
                                <div class="ArticleMainPictureBG">
                                    <a href="/anime_site/article.php?ID=<?= $row['ID']; ?>"><img src="images/<?= $row['Img1']; ?>" style="height: 100%; width: 100%; float: right;"></a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4">
                                <div class="ArticleSuggestedArticlesBG" style="background-color: lightblue; width: 100%; height: 100%;">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            TEST
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php print_r($row); ?>
                </div>
            <?php
            }
        ?>
    </div> 
</div> 
<?php
 include('navbar.php');
?>
<div class="row">
    <div class="container">
        <?php
            // Query to fetch currently available articles
            $FetchArticles = "SELECT * FROM omoore94_animerooms.cmsarticles AS A INNER JOIN omoore94_animerooms.cmsarticlesinfo AS AI ON AI.ID = A.ID WHERE A.ID = 4 ORDER BY A.ID DESC";        
            $FetchArticlesResult = mysqli_query($conn, $FetchArticles);
            $ArticleRow = array();
            while($row = mysqli_fetch_assoc($FetchArticlesResult)){
                array_push($ArticleRow, $row);
            }
            ?>
                <div class="ArticlePageBG">
                    <!-- Article Title -->
                    <div class="ArticlePageTitleBG">
                        <h2 class="ArticlePageTitle"><?= $ArticleRow[0]['ArticleName']; ?></h2>
                    </div>
                    <!-- Article Author -->
                    <h6 class="ArticlePageAuthor">By <span style="color: #0B5AA3;"><?= $ArticleRow[0]['User']; ?></span></h6>
                    <!-- Timestamp from when the article was created -->
                    <h6 class="ArticlePageTimestamp"><?= date("F d, Y g:i A",strtotime($ArticleRow[0]['Timestamp'])); ?></h6>
                    <div id="ArticleHeaderSection">
                        <div class="row">
                            <div class="col-sm-12 col-lg-8">
                                <div class="ArticleMainPictureBG">
                                    <a href="/anime_site/article.php?ID=<?= $ArticleRow[0]['ID']; ?>"><img src="images/<?= $ArticleRow[0]['Img1']; ?>" style="height: 100%; width: 100%; float: right;"></a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4">
                                <div class="ArticleSuggestedArticlesBG" style="background-color: lightblue;">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h5 class="ArticleRecentArticlesTextTop">Recent Articles</h5>
                                        <?php
                                            $RecentArticles = "SELECT * FROM omoore94_animerooms.cmsarticles AS A INNER JOIN omoore94_animerooms.cmsarticlesinfo AS AI ON AI.ID = A.ID ORDER BY A.ID DESC LIMIT 5";        
                                            $RecentArticlesResult = mysqli_query($conn, $RecentArticles);
                                            while($row = mysqli_fetch_assoc($RecentArticlesResult)){
                                                // print_r($row);
                                        ?>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-4">
                                                    <div class="ArticleRecentImages">
                                                        <a href="/anime_site/article.php?ID=<?= $row['ID']; ?>"><img src="images/<?= $row['Img1']; ?>" style="height: 90px; width: 100%; float: right;"></a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-8">
                                                    Ex 2
                                                </div>
                                            </div>
                                        <?php
                                            }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
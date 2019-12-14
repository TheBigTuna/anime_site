<?php
 include('navbar.php');
?>
<div class="row">
    <div class="container">
        <?php
            // Query to fetch currently available articles
            $FetchArticles = "SELECT * FROM omoore94_animerooms.cmsarticles AS A INNER JOIN omoore94_animerooms.cmsarticlesinfo AS AI ON AI.ID = A.ID WHERE A.ID = 5 ORDER BY A.ID DESC";        
            $FetchArticlesResult = mysqli_query($conn, $FetchArticles);
            $ArticleRow = array();
            while($row = mysqli_fetch_assoc($FetchArticlesResult)){
                array_push($ArticleRow, $row);
            }
            $_SESSION['CurrentPage'] = $ArticleRow[0]['ArticleName'];
            $_SESSION['CurrentSubtitle'] = $ArticleRow[0]['ArticleSubTitle'];
            $_SESSION['ArticleAuthor'] = $ArticleRow[0]['User'];
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
                    <div id="ArticleSection">
                        <div class="row">
                            <div class="col-sm-12 col-lg-8">
                                <!-- First picture for the current article -->
                                <div class="ArticleMainPictureBG">
                                    <img src="images/<?= $ArticleRow[0]['Img1']; ?>" class="ArticleImg" style="height: 450px; width: 100%; object-fit: cover; float: right;">
                                </div>
                                <!-- List tagged categories for the current article -->
                                <div class="ArticleListTags">
                                    <ul>
                                        <a href="#"><li><?= $ArticleRow[0]['Tag1']; ?></li></a>
                                        <a href="#"><li><?= $ArticleRow[0]['Tag2']; ?></li></a>
                                        <a href="#"><li><?= $ArticleRow[0]['Tag3']; ?></li></a>
                                        <a href="#"><li><?= $ArticleRow[0]['Tag4']; ?></li></a>
                                        <a href="#"><li><?= $ArticleRow[0]['Tag5']; ?></li></a>
                                    </ul>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12 col-lg-12">
                                        <div class="ArticleBodyContainer">
                                            <div class="ArticleSubTitleBg">
                                                <h6 class="ArticleSubTitle"><?= $ArticleRow[0]['ArticleSubTitle']; ?></h6>
                                            </div>
                                            <div class="ArticleTextBg">
                                                <p id="ArticleText"><?= SplitArticle($ArticleRow[0]['Text'], '1'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-12 col-lg-4">
                                <div class="ArticleSuggestedArticlesBG">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h5 class="ArticleRecentArticlesTextTop">Recent Articles</h5>
                                        <?php
                                            // Loop throught the recent articles session array
                                            foreach($_SESSION['RecentArticles'] as $row){
                                        ?>
                                            <a href="/anime_site/article.php?ID=<?= $row['ID']; ?>">
                                                <div class="row" style="margin: 20px 0px;">
                                                    <div class="col-sm-12 col-md-5">
                                                        <!-- Recent Article Images -->
                                                        <div class="ArticleRecentImagesContainer">
                                                            <img src="images/<?= $row['Img1']; ?>" style="height: 90px; width: 100%; float: right; object-fit: cover;">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-7">
                                                        <!-- Recent Article Titles -->
                                                        <div class="ArticleRecentTitleContainer">
                                                            <h6 class="ArticleRecentTitle"><?= $row['ArticleName']; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
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
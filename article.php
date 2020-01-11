<?php
 include('navbar.php');
?>
<div class="row">
    <div class="container">
        <div class="ArticlePageBG">
            <!-- Article Title -->
            <div class="ArticlePageTitleBG">
                <h1 class="ArticlePageTitle"><?= $ArticleRow[0]['ArticleName']; ?></h1>
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
                                    <!-- Article subtitle -->
                                    <div class="ArticleSubTitleBg">
                                        <h6 class="ArticleSubTitle"><?= $ArticleRow[0]['ArticleSubTitle']; ?></h6>
                                    </div>
                                    <div class="ArticleTextBg">
                                        <p id="ArticleText"><?php SplitArticle($ArticleRow[0]['Text'], $ArticleRow[0]['ArticleType'], $ImageArray); ?></p>
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
                                                    <img src="images/<?= $row['Img1']; ?>">
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
<?php
    include('footer.php');
?>

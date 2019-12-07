<?php
 include('navbar.php');
?>

<div class="container">
    <div class="ArticlePreviewBG">
    <?php
        // Query to fetch currently available articles
        $FetchArticles = "SELECT * FROM omoore94_animerooms.cmsarticles AS A INNER JOIN omoore94_animerooms.cmsarticlesinfo AS AI ON AI.ID = A.ID ORDER BY A.ID DESC";        
        $FetchArticlesResult = mysqli_query($conn, $FetchArticles);
        while($row = mysqli_fetch_assoc($FetchArticlesResult)){
    ?>
    <div class="ArticlePreviewCard">
        <div class="row">
            <div class="col-sm-12 col-lg-2">
                <div class="ArticlePreviewImgContainer">
                    <a href="#"><img src="images/<?= $row['Img1']; ?>" class="ArticlePreviewImg"></a>
                </div>
            </div>
            <div class="col-sm-12 col-lg-10">
                <div class="ArticlePreviewContent">
                    <a href="#"><h5 class="ArticlePreviewTitle"><?= $row['ArticleName']; ?></h5></a>
                    <!-- <h6 class="ArticlePreviewSubTitle"><?= $row['ArticleSubTitle']; ?></h6> -->
                    <?php
                        if(strlen($row['Text']) > 250){
                            $row['Text'] = substr_replace($row['Text'], "<span style='font-size:16px; font-weight: 600;'>....</span><a href='#'><span style='font-size:13px; color: #1bb1dc;'> Read More </span></a>", 250);
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
    ?>
</div>

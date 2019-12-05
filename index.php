<?php
 include('navbar.php');
?>

<div class="container">
    <div class="PageContainer">
        <h6 class="PageContainerHeadText">Recent Posts</h6>
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
                        <img src="images/<?= $row['Img1']; ?>" style="max-width:100%; max-height: 100%;" class="ArticlePreviewImg"> 
                    </div>
                </div>
                <div class="col-sm-12 col-lg-10">
                    <h6 class="ArticlePreviewTitle"><?= $row['ArticleName']; ?></h6>
                    <p class="ArticlePreviewSubTitle"><?= $row['ArticleName']; ?></p>
                    <?php
                        if(strlen($row['Text']) > 400){
                            $row['Text'] = substr_replace($row['Text'], "<span style='font-size:18px; font-weight: 600;'>....</span><a href='#'><span style='font-size:13px; color: #1bb1dc;'> Read More </span></a>", 400);
                        }
                    ?>
                    <small><?= $row['Text']; ?></small>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
        </div>
    </div>
</div>
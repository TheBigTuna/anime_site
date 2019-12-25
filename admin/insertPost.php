<?php
    session_start();
    include('../resources/connection.php');

    $Tag1 = "";
    $Tag2 = "";
    $Tag3 = "";
    $Tag4 = "";
    $Tag5 = "";
    $Img1 = "";
    $Img2 = "";
    $Img3 = "";
    $Img4 = "";
    $Img5 = "";

    

    // Post variables to be inserted into the cmsarticles table
    $Title = mysqli_real_escape_string($conn, $_POST['Title']);
    $SubTitle = mysqli_real_escape_string($conn, $_POST['SubTitle']);
    $User = mysqli_real_escape_string($conn, "Octavius");
    $CurrentDate = mysqli_real_escape_string($conn, date("Y-m-d H:i:s"));

    // Post variables to be inserted into the cmsarticlesinfo table
    $ArticleType = mysqli_real_escape_string($conn, $_POST['PostType']);
    $ArticleText = mysqli_real_escape_string($conn, $_POST['PostText']);
    $Tag1 = mysqli_real_escape_string($conn, $_POST['Tags'][0]);
    $Tag2 = mysqli_real_escape_string($conn, $_POST['Tags'][1]);
    $Tag3 = mysqli_real_escape_string($conn, $_POST['Tags'][2]);
    $Tag4 = mysqli_real_escape_string($conn, $_POST['Tags'][3]);
    $Tag5 = mysqli_real_escape_string($conn, $_POST['Tags'][4]);
    $Img1 = mysqli_real_escape_string($conn, $_POST['Img'][0]);
    $Img2 = mysqli_real_escape_string($conn, $_POST['Img'][1]);
    $Img3 = mysqli_real_escape_string($conn, $_POST['Img'][2]);
    $Img4 = mysqli_real_escape_string($conn, $_POST['Img'][3]);
    $Img5 = mysqli_real_escape_string($conn, $_POST['Img'][4]);

    // Begin transaction
    // mysqli_begin_transaction($conn, MYSQLI_TRANS_START_READ_ONLY);

    $InsertFail = false;

    // Checks for the largest ID available
    $FetchID = "SELECT max(ID) AS ID FROM omoore94_animerooms.cmsarticles";        
    $FetchIDResult = mysqli_query($conn, $FetchID);
    while($row = mysqli_fetch_assoc($FetchIDResult)){
        $ID = $row['ID'];
    }
    // Adds one to the largest ID available
    $ID++;

    $ID = mysqli_real_escape_string($conn, $ID);

    // Insert into article results table
    $InsertArticle = "INSERT INTO omoore94_animerooms.cmsarticles (ID, ArticleName, ArticleSubTitle, User, Timestamp) VALUES ('$ID', '$Title', '$SubTitle', '$User', '$CurrentDate'); ";  
    $InsertArticleResult = mysqli_query($conn, $InsertArticle);

    // Insert into article info table
    $InsertArticleInfo = "INSERT INTO omoore94_animerooms.cmsarticlesinfo (ID, ArticleType, Text, Tag1, Tag2, Tag3, Tag4, Tag5, Img1, Img2, Img3, Img4, Img5) VALUES ('$ID', '$ArticleType', '$ArticleText', '$Tag1', '$Tag2', '$Tag3', '$Tag4', '$Tag5', '$Img1', '$Img2', '$Img3', '$Img4', '$Img5'); ";  
    $InsertArticleInfoResult = mysqli_query($conn, $InsertArticleInfo);

    // Checks if a insert statement failed
    if($FetchID == false || $InsertArticleResult == false || $InsertArticleInfoResult){
        $InsertFail == true;
    }

    if($InsertFail == true){
        // $mysqli->rollback();
    }
    else{
        // mysqli_commit($link);
    }

    header("Location: main.php");
?>
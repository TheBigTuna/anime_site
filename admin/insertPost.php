<?php
    session_start();
    include('../resources/connection.php');
    print_r($_POST);
    echo "<br>";
    print_r($_FILES);

    $Title = $_POST['Title'];
    $SubTitle = $_POST['SubTitle'];
    $User = "omoore94";
    $CurrentDate = date("Y-m-d H:i:s");
    
    $InsertFail = false;
    // mysqli_begin_transaction($conn, MYSQLI_TRANS_START_READ_ONLY);

    $InsertArticle = "INSERT INTO omoore94_animerooms.cmsarticles (ID,ArticleName, ArticleSubTitle, User, Timestamp) VALUES ('NULL', '$Title', '$SubTitle', '$User', '$CurrentDate'); ";  
    $InsertArticleResult = mysqli_query($conn, $InsertArticle);


    // if($InsertArticleResult == false){
    //     $InsertFail == true;
    // }
    // if($InsertFail == true){
    //     echo "1";
    //     $mysqli->rollback();
    // }
    // else{
    //     echo "2";
    //     mysqli_commit($link);
    // }
?>
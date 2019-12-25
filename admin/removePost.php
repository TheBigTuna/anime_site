<?php
    session_start();
    include('../resources/connection.php');

    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    $RemoveArticle = "DELETE FROM omoore94_animerooms.cmsarticles WHERE ID = $ID";
    $RemoveArticleResult = mysqli_query($conn, $RemoveArticle);

    $RemoveArticle = "DELETE FROM omoore94_animerooms.cmsarticlesinfo WHERE ID = $ID";
    $RemoveArticleResult = mysqli_query($conn, $RemoveArticle);

    header('Location: /anime_site/admin/managePost.php');
    exit();
?>
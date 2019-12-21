<?php
    session_start();
    include('../resources/connection.php');

    $ID = $_GET['ID'];
    $SQL = "DELETE FROM omoore94_animerooms.cmsarticles WHERE ID = ?";
    $RemoveArticle = $conn->prepare($SQL);
    $RemoveArticle->bind_param('s', $ID);
    $RemoveArticle->execute();

    $SQL = "DELETE FROM omoore94_animerooms.cmsarticlesinfo WHERE ID = ?";
    $RemoveArticleInfo = $conn->prepare($SQL);
    $RemoveArticleInfo->bind_param('s', $ID);
    $RemoveArticleInfo->execute();

    header('Location: /anime_site/admin/ManagePost.php');
    exit();
?>
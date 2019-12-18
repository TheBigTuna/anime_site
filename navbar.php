<!DOCTYPE html>
    <html lang="en">
        <head>
          <?php
              // Start the session
              session_start();
              include("resources/connection.php"); 
              include("functions.php"); 
              //  include("/anime_site/api_config.php"); 
              include("resources/pageInfo.php"); 
          ?>
              <title><?= $_SESSION['CurrentPage']; ?> - animerooms.com</title>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <meta name='description' content="<?= $_SESSION['CurrentSubtitle']; ?>">            
              <meta name="author" content="<?= $_SESSION['ArticleAuthor']; ?>">
              <link rel="icon" href="/anime_site/images/halfLogo.png">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
              <link href="/anime_site/style/bootstrap.css" rel="stylesheet">
              <link href="/anime_site/style/main.css" rel="stylesheet">
              <script src="/anime_site/script/jquery-3.4.1.js"></script>
              <script src="/anime_site/script/bootstrap.js"></script>
              <script src="/anime_site/script/main.js"></script>
              <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152462977-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'UA-152462977-1');
            </script>
        </head>
    <body>
        <div class="container-fluid" id="mainPageContainer">
          <nav class="navbar navbar-expand-lg" id="mainNav">
            <!-- Navbar Logo Image -->
            <div id="navImgContainer">
              <a href="/anime_site/index.php">
                <img src="/anime_site/images/fullLogo.png" id="navLogoImg">
              </a>
            </div>
            <div id="navbarNav">
              <ul class="navbar-nav" id="navbarMenu">
              <li class="nav-item">
                  <a class="nav-link navMenuLink" href="/anime_site/index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link navMenuLink" href="/anime_site/layout/lifestyle.php">lifestyle</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link navMenuLink active" href="/anime_site/layout/anime.php">anime</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link navMenuLink" href="/anime_site/layout/manga.php">manga</a>
                </li> -->
                <li class="nav-item">
                  <!-- <a class="nav-link navMenuLink" href="/anime_site/layout/about.php">about</a> -->
                </li>
                <li class="nav-item">
                  <a class="nav-link navMenuLink" href="/anime_site/layout/contact.php">contact</a>
                </li>
                <?php
                if(isset($_SESSION['IsAdmin'])){
                ?>
                <li class="nav-item">
                  <a class="nav-link navMenuLink" href="/anime_site/admin/index.php">Admin</a>
                </li>
                <?php
                }
                ?>
              </ul>
            </div>
          </nav>
        </div>

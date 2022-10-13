<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>FunTimes</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<?php
  if(!isset($_SESSION['Mail']))
  {
    session_start();
  }
?>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="" />
          </a>
          <div class="navbar-collapse" id="">
            <ul class="navbar-nav justify-content-between ">
              <div class="User_option">
                <?php
                    if(!isset($_SESSION['Mail']))
                    {
                    echo '
                    <li class="">
                  <a class="mr-4" href="login.php">
                    Se connecter
                  </a>
                  <a class="" href="signup.php">
                    S\'inscrire
                  </a>
                </li>
                    ';
                    }
                    else
                    {
                      echo '
                    <li class="">
                  <a class="mr-4" style="color:white">
                    Bonjour '. $_SESSION['Nom'].' '. $_SESSION['Prenom'].'
                  </a>
                  <a class="" href="disconnect.php">
                    Se déconnecter
                  </a>
                </li>
                    ';
                    }
                
                ?>
              </div>
            </ul>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">Accueil</a>
                <a href="house.php">Activités</a>
                <a href="jeux.php">Jeux</a>
                <!--<a href="price.php">JSP QUOI METTRE</a>
                <a href="contact.php">Contactez Nous</a> -->
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 offset-md-1">
            <div class="detail-box">
              <h1>
                <span>Fun</span> <br>
                 Times<br>
              </h1>
              <p>
                Découvrez les activités de votre entreprise.
              </p>
              <div class="btn-box">
              <br><br><br><br><br><br><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end slider section -->
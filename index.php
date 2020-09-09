<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-VA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts/fonts.css">
  <link rel="stylesheet" href="css/stylehamburger.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Nouvelle Forge - Accueil</title>

</head>
<body onload="position('home');">
  <?php include "inc/header.php" ?>
  <?php include "inc/nav.php" ?>
  <main class="home">
    <section>
      <!-- Contenant du Carousel -->
      <div class="slider-container">

        <!-- Premiere Slide -->
        <div class="slides fade">
          <img src="img/Espace_Co-working.jpg" alt="Photo de l'espace de co-working de la Nouvelle-Forge">
          <div class="text">
            <h3>Un espace de Co-Working</h3>
          </div>
        </div>

        <!-- Deuxieme Slide -->
        <div class="slides fade">
          <img src="img/ForgeLab.jpg" alt="Photo de l'espace de Fabrication Numérique de la Nouvelle-Forge">
          <div class="text">
            <h3>Un espace de fabrication numérique : Le ForgeLab</h3>
          </div>
        </div>

        <!-- Troisieme Slide -->
        <div class="slides fade">
          <img src="img/Locations.jpg" alt="Photo d'une des salle de réunion disponible à la location à la Nouvelle-Forge">
          <div class="text">
            <h3>Des locations de bureaux et/ou de salles de réunion.</h3>
          </div>
        </div>

        <!-- Bouton slide précédant -->
        <a class="prev" id="prev"><</a> 
        <!-- Bouton slide suivant -->
        <a class="next" id="next">></a>

      </div>
      <br>
      <!-- Indicateurs de Position -->
      <div class="dots">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>

      <div class="descrip">
        <h3> Nouvelle forge : </h3>
        <p>
          Espace dédié à l’émergence et au développement de start-ups numérique,
          installé aux portes du Parc des Rives Créatives de l’Escaut, Nouvelle Forge
          propose aux innovateurs, entrepreneurs et co-workers de tous horizons 1300 m2
          de bureaux ainsi que tous les services et programmes utiles à la création
          et au développement de projets numériques innovants. La Nouvelle Forge est
          un FabLab adossé à un espace de co-working, une pépinière d’entreprises,
          un organisme de formation centré sur les métiers du numérique.
        </p>
      </div>
    </section>

    <section class="news">
      <h2 class="title-section">Articles & Actualités</h2>
      <div class="content-section">
        <article>
          <h3 class="article-title">Création d'une enseigne pour Le Phare de Onnaing</h3>
          <div class="article-content">
            <img class="article-picture" src="img/imageArticle.jpg" alt="">
            <p class="article-text">
              C'est en ce moment à Nouvelle Forge : création d'une enseigne pour l'espace socioculturel
              Le Phare de Onnaing ! Découverte de l'impression 3D, découpe et gravure laser,
              dessin et création de fichiers sur logiciel. Un beau projet à découvrir prochainement
              sur la façade du Phare !
            </p>
          </div>
        </article>
        <article>
          <h3 class="article-title">Journée super héroïque à Nouvelle Forge</h3>
          <div class="article-content">
            <img class="article-picture" src="img/imageArticle2.jpg" alt="">
            <p class="article-text">
              Très beau temps d'animation avec les jeunes de la Maison de Quartier du Centre Ville
              de Valenciennes : découpage au laser de badges, portes cléfs et plateau de jeu et
              confections 3D de pions ! A très bientôt !!
            </p>
          </div>
        </article>
      </div>
    </section>
  </main>
  <script src="js/carousel.js" charset="utf-8"></script>
  <?php include "inc/footer.php" ?>
</body>
</html>

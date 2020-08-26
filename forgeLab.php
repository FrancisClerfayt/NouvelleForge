<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-VA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fonts/fonts.css">
  <title>Nouvelle Forge - ForgeLab</title>
</head>
<body onload="position('forgelab');">
  <?php include "inc/header.php" ?>
  <?php include "inc/nav.php" ?>

  <main class="forgeLab">
    <section>
      <h2 class="titre">Le ForgeLab.</h2>
      <div class="description">
        <div class="imgDesc">
          <img src="img/ForgeLab.jpg" alt="Photo du ForgeLab de la Nouvelle Forge">
        </div>
        <div class="textDesc">
          <p>
            L'équipe de la Nouvelle forge est heureuse de vous voir acceuillir dans son Fablab.
          </p>
          <p>
            Le "Forge Lab", atelier de fabrication numérique, est notamment équipéde :
          </p>
          <dl>
            <dt>&rarr; plusieurs imprimantes 3D,</dt>
            <dt>&rarr; d'une découpeuse laser,</dt>
            <dt>&rarr; d'une découpeuse vinyle,</dt>
            <dt>&rarr; d'une fraiseuse numérique, </dt>
            <dt>&rarr; d'une brodeuse numérique, </dt>
            <dt>&rarr; et de modules Arduino et Raspbery Pi.</dt>
          </dl>
        </div>
      </div>
    </section>

    <h3 class="titre"> Nos Machines </h3>
    <section class="machines">
      <div class="machine">
        <!-- Description imprimante 3D Zortrax M200 -->
        <div class="imgMachine">
          <img src="img/imprimante-3d.jpg" alt="Photo de l'imprimante 3D Zortrax M200">
        </div>
        <div class="descMachine">
          <h5>Imprimpantes 3D</h5>
          <p>La Zortrax M200 est une imprimante 3D low cost utilisant une technologie FDM, une impression par dépôt de fil avec extrusion thermoplastique. C'est une machine idéale pour réaliser rapidement des prototypes 3D avec des couleurs différentes.</p>
          <div class="liens-machine">
            <a  class="btn1"href="reserver.html"> Réserver </a>
            <a  class="btn1"href="seformer.html"> Se former </a>
            <a  class="btn1"href="plusd'informations.html"> Plus d'informations </a>
          </div>
        </div>
      </div>
      <div class="machine">
        <!-- Description graveuse Speedy -->
        <div class="imgMachine">
          <img src="img/decoupeuse-laser.jpg" alt="Photo de la graveuse Speedy">
        </div>
        <div class="descMachine">
          <h5>Une découpeuse laser</h5>
          <p>
            La Speedy est la machine de gravure laser idéale,
            soit pour démarrer une activité, ou bien afin d'améliorer et
            d'augmenter votre productivité.
            En effet, des composants de très haute qualité garantissent
            un minimum d'entretien.
            La technologie brevetée InPackTM vous propose la durée
            de vie la plus élevée du marché pour une machine laser.
            Notre machine de gravure laser Speedy est conçue et
            fabriquée à 100% en Autriche.
          </p>
          <div class="liens-machine">
            <a  class="btn2"href="reserver.html"> Réserver </a>
            <a  class="btn2"href="seformer.html"> Se former </a>
            <a  class="btn2"href="plusd'informations.html"> Plus d'informations </a>
          </div>
        </div>
      </div>
      <div class="machine">
        <!-- Description fraiseuse Shopbot -->
        <div class="imgMachine">
          <img src="img/fraiseuse-numerique.jpg" alt="Photo de la fraiseuse numérique Shopbot">
        </div>
        <div class="descMachine">
          <h5>Une Fraiseuse Numérique</h5>
          <p>
            La fraiseuse numérique Shopbot desktop Informations générales
            Cette machine est utilisée pour l'usinage de précision.
            Elle permet principalement d'usiner
            Les principaux matériaux usinables comme le bois, plâtre, résine, cire usinable.
          </p>
          <div class="liens-machine">
            <a class="btn3" href="reserver.html"> Réserver </a>
            <a class="btn3" href="seformer.html"> Se former </a>
            <a class="btn3" href="plusd'informations.html"> Plus d'informations </a>
          </div>
        </div>
      </div>
      <div class="machine">
        <div class="imgMachine">
          <!-- Description découpeuse Vinyle Graphtex CR6000-60 -->
          <img src="img/decoupeuse-vinyle.jpg" alt="Photo de la découpeuse Vinyle Graphtex CR6000-60">
        </div>
        <div class="descMachine">
          <h5>Une Découpeuse Vinyle</h5>
          <p>
            Préparation à l'utilisation de la Graphtec CE6000-60 Informations générales
            Envie de réaliser un tee shirt personnalisé ?
            Un sticker à l'effigie votre groupe préféré ?
            Un masque pour la réalisation d'un circuit imprimé?
            Pour cela, il suffit simplement de venir avec votre fichier vectorisé
            (ne pas oublier de vectoriser les textes) type illustrator svg ou dxf.
            Matériaux utilisés:
            Cette machine permet de découper principalement du vinyle,vinyle réfléchissant, flex.
          </p>
          <div class="liens-machine">
            <a class="btn1" href="reserver.html"> Réserver </a>
            <a class="btn1" href="seformer.html"> Se former </a>
            <a class="btn1" href="plusd'informations.html"> Plus d'informations </a>
          </div>
        </div>
      </div>
      <div class="machine">
        <!-- Description brodeuse numérique -->
        <div class="imgMachine">
          <img src="img/brodeuse-numerique.jpg" alt="Photo de la brodeuse numérique">
        </div>
        <div class="descMachine">
          <h5>Une brodeuse numérique</h5>
          <p>Notre brodeuse numérique permetde broder automatiquement jusqu’à 1050 points à la minute. Avec les différentes aiguilles de l’appareil, on peut travailler différentes 	matiéres comme le tissu, le textile ou le cuir.</p>
          <div class="liens-machine">
            <a class="btn2" href="reserver.html"> Réserver </a>
            <a class="btn2" href="seformer.html"> Se former </a>
            <a class="btn2" href="plusd'informations.html"> Plus d'informations </a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include "inc/footer.php" ?>
</body>
</html>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-VA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <link rel="stylesheet" href="fonts/fonts.css">
  <link rel="stylesheet" href="/css/stylehamburger.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Nouvelle Forge - ForgeLab</title>
</head>
<body onload="position('forgelab');">
  <?php include "inc/header.php" ?>
  <?php include "inc/nav.php" ?>
  <?php include "inc/modaux.php" ?>

  <main class="forgeLab">
    <section>
      <div class="description">
        <div class="description-picture">
          <img src="img/ForgeLab.jpg" alt="Photo du ForgeLab de la Nouvelle Forge">
        </div>
        <div class="description-text">
          <div class="sable-line"></div>
          <h2 class="big-title">Le ForgeLab.</h2>
          <div class="sable-line"></div>
          <p>
            L'équipe de la Nouvelle Forge est heureuse de vous voir accueillir dans son FabLab.
          </p>
          <p>
            Le "Forge Lab", atelier de fabrication numérique, est notamment équipé de :
          </p>
          <dl>
            <dt>&rarr; plusieurs <a class="fablab-link" href="#impr3D">imprimantes 3D</a>,</dt>
            <dt>&rarr; d'une <a class="fablab-link" href="#laser">découpeuse laser</a>,</dt>
            <dt>&rarr; d'une <a class="fablab-link" href="#vinyle">découpeuse vinyle</a>,</dt>
            <dt>&rarr; d'une <a class="fablab-link" href="#fraiseuse">fraiseuse numérique</a>, </dt>
            <dt>&rarr; d'une <a class="fablab-link" href="#brodeuse">brodeuse numérique</a>, </dt>
            <dt>&rarr; et de modules Arduino et Raspbery Pi.</dt>
          </dl>
        </div>
      </div>
    </section>

    <section class="machines">
      <div class="machines-title">
        <div class="sable-line third"></div>
        <h3 class="third"> Nos Machines </h3>
        <div class="sable-line third"></div>
      </div>
      <div id="impr3D" class="machine">
        <div class="machine-picture">
          <img src="img/imprimante-3d.jpg" alt="Photo de l'imprimante 3D Zortrax M200">
        </div>
        <!-- Description imprimante 3D Zortrax M200 -->
        <div class="machine-description">
          <div class="info-text">
            <h4 class="sable-title machine-title">Des imprimantes 3D</h4>
            <p>
              La Zortrax M200 est une imprimante 3D low-cost utilisant une technologie FDM,
              une impression par dépôt de fil avec extrusion thermoplastique.
              C'est une machine idéale pour réaliser rapidement des prototypes 3D avec des
              couleurs différentes.
            </p>
            <div class="machine-links">
              <a  class="btn1" href="reserver.html"> Réserver </a>
              <a  class="btn1" href="seformer.html"> Se former </a>
              <button class="btn1" type="button" id="btnInfoImpr3D" data-toggle="modal" data-target="#infoImpr3d">Plus d'informations</button>
            </div>
          </div>
        </div>
      </div>
      <div class="sable-line"></div>
      <div id="laser" class="machine">
        <div class="machine-picture">
          <img src="img/decoupeuse-laser.jpg" alt="Photo de la graveuse Speedy">
        </div>
        <!-- Description graveuse Speedy -->
        <div class="machine-description">
          <h4 class="sable-title">Une découpeuse laser</h4>
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
          <div class="machine-links">
            <a  class="btn1" href="reserver.html"> Réserver </a>
            <a  class="btn1" href="seformer.html"> Se former </a>
            <a  class="btn1" href="plusd'informations.html"> Plus d'informations </a>
          </div>
        </div>
      </div>
      <div class="sable-line"></div>

      <div id="vinyle" class="machine">
        <div class="machine-picture">
          <img src="img/decoupeuse-vinyle.jpg" alt="Photo de la découpeuse Vinyle Graphtex CR6000-60">
        </div>
        <!-- Description découpeuse Vinyle Graphtex CR6000-60 -->
        <div class="machine-description">
          <h4 class="sable-title">Une Découpeuse Vinyle</h4>
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
          <div class="machine-links">
            <a class="btn1" href="reserver.html"> Réserver </a>
            <a class="btn1" href="seformer.html"> Se former </a>
            <a class="btn1" href="plusd'informations.html"> Plus d'informations </a>
          </div>
        </div>
      </div>
      <div class="sable-line"></div>

      <div id="fraiseuse" class="machine">
        <div class="machine-picture">
          <img src="img/fraiseuse-numerique.jpg" alt="Photo de la fraiseuse numérique Shopbot">
        </div>
        <!-- Description fraiseuse Shopbot -->
        <div class="machine-description">
          <h4 class="sable-title">Une Fraiseuse Numérique</h4>
          <p>
            La fraiseuse numérique Shopbot desktop Informations générales
            Cette machine est utilisée pour l'usinage de précision.
            Elle permet principalement d'usiner
            Les principaux matériaux usinables comme le bois, plâtre, résine, cire usinable.
          </p>
          <div class="machine-links">
            <a class="btn1" href="reserver.html"> Réserver </a>
            <a class="btn1" href="seformer.html"> Se former </a>
            <a class="btn1" href="plusd'informations.html"> Plus d'informations </a>
          </div>
        </div>
      </div>
      <div class="sable-line"></div>

      <div id="brodeuse" class="machine">
        <div class="machine-picture">
          <img src="img/brodeuse-numerique.jpg" alt="Photo de la brodeuse numérique">
        </div>
        <!-- Description brodeuse numérique -->
        <div class="machine-description">
          <h4 class="sable-title">Une brodeuse numérique</h4>
          <p>
            Notre brodeuse numérique permet de broder automatiquement jusqu’à 1050 points à la minute.
            Avec les différentes aiguilles de l’appareil, on peut travailler différentes 	matiéres comme
            le tissu, le textile ou le cuir.
          </p>
          <div class="machine-links">
            <a class="btn1" href="reserver.html"> Réserver </a>
            <a class="btn1" href="seformer.html"> Se former </a>
            <a class="btn1" href="plusd'informations.html"> Plus d'informations </a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include "inc/footer.php" ?>
</body>
</html>

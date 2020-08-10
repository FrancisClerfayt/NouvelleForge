<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fonts/fonts.css">
  <title>Nouvelle Forge</title>

</head>
<body>
  <?php include "inc/header.php" ?>

  <main>
    <!-- Contenant du Carousel -->
    <div class="slider-container">

      <!-- Premiere Slide -->
      <div class="slides fade">
        <img src="img/Espace_Co-working.jpg" alt="Photo de l'espace de co-working de la Nouvelle-Forge">
        <div class="text">
          <h3>Un espace de Co-Working</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <!-- Deuxieme Slide -->
      <div class="slides fade">
        <img src="img/ForgeLab.jpg" alt="Photo de l'espace de Fabrication Numérique de la Nouvelle-Forge">
        <div class="text">
          <h3>Un FabLab (Le ForgeLab)</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <!-- Troisieme Slide -->
      <div class="slides fade">
        <img src="img/Locations.jpg" alt="Photo d'une des salle de réunion disponible à la location à la Nouvelle-Forge">
        <div class="text">
          <h3>Des locations de bureaux et/ou de salles de réunion.</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <!-- Bouton slide précédant -->
      <a class="prev" onclick="plusSlide(-1)">&#10094;</a>
      <!-- Bouton slide suivant -->
      <a class="next" onclick="plusSlide(1)">&#10095;</a>

    </div>
    <br>
    <!-- Indicateurs de Position -->
    <div class="dots">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script type="text/javascript" src="js/script.js"></script>


    <h3> Nouvelle forge : </h3>
    <img class="imageactu" src="images/actu1.png" alt="imageactu">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Fusce nulla augue, luctus eu ultrices tristique, luctus ut dolor.
      Ut interdum nisi nec malesuada commodo.
      Maecenas at lacus molestie mauris vehicula consectetur sit amet non nisl.
      Pellentesque porttitor ante in tellus pellentesque, a finibus turpis convallis.
      Nulla porta nisi sapien, id egestas mi dictum sit amet. In hac habitasse platea dictumst.
      Vivamus in mi nec eros iaculis blandit. Mauris vehicula vel nibh ut suscipit.
      Sed dictum augue sed placerat tincidunt. Aliquam et efficitur quam.
      Pellentesque tellus sem, molestie vel felis id, maximus lacinia lacus.
      Pellentesque cursus ex et ultricies ultrices.
      Nullam lobortis malesuada felis vitae placerat.
      Integer non suscipit felis. Suspendisse vulputate at odio id ornare.
    </p>

    <h3> Titre Actualité 1</h3>
    <img class="imageactu" src="images/actu1.png" alt="imageactu">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Fusce nulla augue, luctus eu ultrices tristique, luctus ut dolor.
      Ut interdum nisi nec malesuada commodo.
      Maecenas at lacus molestie mauris vehicula consectetur sit amet non nisl.
      Pellentesque porttitor ante in tellus pellentesque, a finibus turpis convallis.
      Nulla porta nisi sapien, id egestas mi dictum sit amet. In hac habitasse platea dictumst.
      Vivamus in mi nec eros iaculis blandit. Mauris vehicula vel nibh ut suscipit.
      Sed dictum augue sed placerat tincidunt. Aliquam et efficitur quam.
      Pellentesque tellus sem, molestie vel felis id, maximus lacinia lacus.
      Pellentesque cursus ex et ultricies ultrices.
      Nullam lobortis malesuada felis vitae placerat.
      Integer non suscipit felis. Suspendisse vulputate at odio id ornare.
    </p>

    <h3> Titre Actualité 2</h3>
    <img class="imageactu" src="images/actu1.png" alt="imageactu">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Fusce nulla augue, luctus eu ultrices tristique, luctus ut dolor.
      Ut interdum nisi nec malesuada commodo.
      Maecenas at lacus molestie mauris vehicula consectetur sit amet non nisl.
      Pellentesque porttitor ante in tellus pellentesque, a finibus turpis convallis.
      Nulla porta nisi sapien, id egestas mi dictum sit amet. In hac habitasse platea dictumst.
      Vivamus in mi nec eros iaculis blandit. Mauris vehicula vel nibh ut suscipit.
      Sed dictum augue sed placerat tincidunt. Aliquam et efficitur quam.
      Pellentesque tellus sem, molestie vel felis id, maximus lacinia lacus.
      Pellentesque cursus ex et ultricies ultrices.
      Nullam lobortis malesuada felis vitae placerat.
      Integer non suscipit felis. Suspendisse vulputate at odio id ornare.
    </p>

  </main>

  <?php include "inc/footer.php" ?>
</body>
</html>

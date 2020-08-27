<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-VA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fonts/fonts.css">
  <link rel="stylesheet" href="/css/stylehamburger.css">

  <title>Nouvelle Forge - Infos</title>
</head>
<body onload="position('infosprat');">
  <?php include "inc/header.php" ?>
  <?php include "inc/nav.php" ?>
  <main class="InfoPrat">

    <!-- Partie maps et infos-->
    <div id="contact" class="">
      <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4279.339138672386!2d3.5122859208790516!3d50.37568555896995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2edd9c1442b63%3A0x12d19ed85c800b25!2s80%20Avenue%20Roland%20Moreno%2C%2059410%20Anzin!5e0!3m2!1sfr!2sfr!4v1597737009786!5m2!1sfr!2sfr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="infos">
        <h3>Notre adresse</h3>
        <p>80 rue Roland Moreno</p>
        <p>59410 ANZIN</p>
        <p>Téléphone: 03 62 26 05 60</p>
        <br>
        <h3>Accueil</h3>
        <p>Du lundi au Vendredi de 8h30 à 17h</p>
        <br>
        <h3>Espace co-working/design</h3>
        <p>Du lundi au jeudi de 9h à 19h</p>
        <p>Le vendredi de 9h à 17h</p>
      </div>
    </div>

    <!-- Partie formulaire de contact-->

    <div id="formulairedecontact" class="container">
      <h3 id="titre">Formulaire de contact</h3>
      <form class="form" id="contactForm"  method="post">
        <div class="flex-form">
          <div class="row">
            <label for="user_name">Nom :</label>
            <input type="text" class="error"  name="user_name" id="user_name">
          </div>
          <div class="row">
            <label for="user_firstname">Prénom :</label>
            <input type="text" name="user_firstname" id="user_firstname">
          </div>
        </div>
        <div class="flex-form">
          <div class="row">
            <label for="user_email">E-mail :</label>
            <input type="email" name="user_email" id="user_email">
            <label id="user_email-error" class="error" for="user_email"></label>
          </div>
          <div class="row">
            <label for="msg">Message :</label>
            <textarea id="user_message" name="user_message" rows="8" cols="80"></textarea>
          </div>
        </div>

        <button class="btn1" type="submit" name="envoi">Envoyer</button>
      </form>
    </div>
  </main>
  <?php include "inc/footer.php" ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js" charset="utf-8"></script>
  <script src="js/controlForm.js" charset="utf-8"></script>
</body>
</html>

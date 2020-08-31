<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-VA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fonts/fonts.css">
  <link rel="stylesheet" href="/css/stylehamburger.css">

  <title>Modal</title>
</head>
<body>
  <a href="#modal1">Ouvrir</a>
  <aside class="modal" id="modal1" aria-hidden="true" role="dialog" aria-labelldby="titlemodal">
    <div class="modal-reservation">
      <h1 id="titlemodal">Réserver une machine</h1>
      <p id="presentation">Pour utiliser l'imprimante 3D, veuillez réserver votre créneau en séléctionnant une date et un horaire disponible.</p>

      <form>

        <label for="start">Séléctionnez une date:</label>
        <input type="date" name="start" id="calendar" value="2020-08-20" min="2020-01-01" max="2020-31-12">
          <label for="appt-time">Veuillez choisir une heure: </label>
          <input id="appt-time" type="time" name="appt-time"
          min="12:00" max="18:00" required
          pattern="[0-9]{2}:[0-9]{2}">
          <span class="validity"></span>
          <input class="btn1" type="submit" value="Envoyer">
      </form>
    </div>
  </aside>

  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>

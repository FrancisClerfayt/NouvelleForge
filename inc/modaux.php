<!-- <div class=""> -->
  <!-- <a href="#modal1">Ouvrir</a> -->
  <!-- <div class="modal" id="modal1" aria-hidden="true" role="dialog" aria-labelldby="titlemodal"> -->
    <!-- <div class="modal-reservation"> -->
      <!-- <h1 id="titlemodal">Réserver une machine</h1> -->
      <!-- <p id="presentation">Pour utiliser l'imprimante 3D, veuillez réserver votre créneau en séléctionnant une date et un horaire disponible.</p> -->
      <!-- <form> -->
        <!-- <label for="start">Séléctionnez une date:</label> -->
        <!-- <input type="date" name="start" id="calendar" value="2020-08-20" min="2020-01-01" max="2020-31-12"> -->
        <!-- <label for="appt-time">Veuillez choisir une heure: </label> -->
        <!-- <input id="appt-time" type="time" name="appt-time" min="12:00" max="18:00" required pattern="[0-9]{2}:[0-9]{2}"> -->
        <!-- <span class="validity"></span> -->
        <!-- <input class="btn1" type="submit" value="Envoyer"> -->
      <!-- </form> -->
    <!-- </div> -->
  <!-- </div> -->
<!-- </div> -->

<!-- Début du Modal Informations des imprimantes 3D -->
<div class="modal fade" id="infoImpr3d" tabindex="-1" role="dialog" aria-labelledby="impr3DModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- modal header -->
      <div class="modal-header">
        <span class="close">&times;</span>
        <h3 class="modal-title" id="impr3DModalLabel">Imprimant 3D Zortrax M200</h3>
      </div>
      <!-- modal body -->
      <div class="modal-body">
        <div class="">
          <h4>Caractéristiques techniques :</h4>
          <p>
            Surface maximale de travail: 200 x 200 x 170mm <br>
            Résolution méchanique: 0,02 mm <br>
            Précision de position: +/- 0,05 <br>
            Logiciel utilisé: Z-suite <br>
            format de fichier acceptés: STL <br>
            Matériaux utilisés: ABS (en stock).
          </p>
        </div>
      </div>
      <!-- modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn1 btnClose" data-dismiss="modal">Retour</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin du Modal validation inscritpion -->

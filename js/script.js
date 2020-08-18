// Début Carousel page d'accueil
let slideIndex = 1;
let myTimer;
let sliderContainer;

// Quand la page est chargée
window.addEventListener("load", function() {
  // On set le premier slide
  showSlides(slideIndex);
  // On met en place l'automatisme
  myTimer = setInterval(function(){plusSlides(1)}, 4000);

  sliderContainer = document.getElementsByClassName
});

// Fonction pour passer au slide suivant ou précédant
function plusSlide(n) {
  clearInterval(myTimer);
  if(n < 0){
    showSlides(slideIndex -= 1);
  } else {
    showSlides(slideIndex += 1);
  }
  if(n === -1){
    myTimer = setInterval( function() { plusSlides(n + 2); }, 4000);
  } else {
    myTimer = setInterval( function() { plusSlides(n + 1); }, 4000);
  }
}

// Fonction pour allaer direction au Slide n
function currentSlide(n) {
  clearInterval(myTimer);
  myTimer = setInterval(function() { plusSlides(n + 1) }, 4000);
  showSlides(slideIndex = n);
}


function showSlides(n) {
  // on récupère les slides
  let slides = document.getElementsByClassName("slides");
  // on récupère les indicateurs
  let dots = document.getElementsByClassName("dot");

  // Si plus grand que nombre de slides retour à 1
  if(n > slides.length){
    slideIndex = 1;
  }
  // Si plus petit que 1 retour dernier Slide
  if(n < 1){
    slideIndex = slides.length;
  }

  // Pour tout les "slides" affichage "aucun"
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Pour tout les "dot" on retire la classe "active"
  for (let i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  // on affiche le slide indiquer par slideIndex (-1 car un tableau commence à 0 et pas 1)
  slides[slideIndex-1].style.display = "block";
  // on donne la classe "active" à l'indicateur correspondant.
  dots[slideIndex-1].className += " active";
}
// Fin Carousel page d'accueil

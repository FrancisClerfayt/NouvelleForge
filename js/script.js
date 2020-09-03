function position(page) {
  let navLinks = document.getElementsByClassName("navLink");
  for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener("click", function(e){
      for (var i = 0; i < navLinks.length; i++) {
        navLinks[i].className.replace(" navActive", "");
      }
    });
  }
  let link = -1;
  switch (page) {
    case "accueil":
    link = 0;
    break;
    case "forgelab":
    link = 1;
    break;
    case "coworking":
    link = 2;
    break;
    case "formation":
    link = 3;
    break;
    case "pepiniere":
    link = 4;
    break;
    case "infosprat":
    link = 5;
    break;
  }
  navLinks[link].className += " navActive";
  navLinks[link+6].className += " navActive";
}

// Get the modal
var modal = document.getElementById("infoImpr3d");

// Get the button that opens the modal
var btn = document.getElementById("btnInfoImpr3D");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Get the button that closes the modal
let btnClose = document.getElementsByClassName("btnClose")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

//When the user clicks on btnClose, close the modal
btnClose.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

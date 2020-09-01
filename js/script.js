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

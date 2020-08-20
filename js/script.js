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
    link = -1;
    break;
    case "forgelab":
    link = 0;
    break;
    case "coworking":
    link = 1;
    break;
    case "formation":
    link = 2;
    break;
    case "pepiniere":
    link = 3;
    break;
    case "infosprat":
    link = 4;
    break;
  }
  if(link != -1){
    navLinks[link].className += " navActive";
  }
}

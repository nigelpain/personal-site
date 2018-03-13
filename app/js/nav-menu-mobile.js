document.getElementById("header__nav-link--mobile").onclick = function(event) {
    nav = document.getElementById("header__nav-list")
    if (nav.className === "header__nav-list") {
      nav.className = "header__nav-list--expanded header__nav-list";
    } else {
      nav.className = "header__nav-list";
    }
  }
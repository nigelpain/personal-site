document.getElementById("header__nav-link--mobile").onclick = function(event) {
    nav = document.getElementById("header__nav-list")
    if (nav.className === "header__nav-list") {
      this.className = "header__nav-link header__nav-link--mobile header__nav-link--mobile-expanded";
      this.textContent = "X";
      nav.className = "header__nav-list--expanded header__nav-list";
    } else {
      this.className = "header__nav-link header__nav-link--mobile";
      this.textContent = "Menu";
      nav.className = "header__nav-list";
    }
  }
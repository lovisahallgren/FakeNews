let mainNav = document.getElementById("js-menu");
let navBarToggle = document.getElementById("js-navbar-toggle");

navBarToggle.addEventListener("click", function() {
  mainNav.classList.toggle("active");
});

let dropdown = document.getElementById("js-menu");
let navbarDropdown = document.getElementById("js-navbar-dropdown");

navBarDropdown.addEventListener("click", function () {
  dropdown.classList.toggle("active");
})

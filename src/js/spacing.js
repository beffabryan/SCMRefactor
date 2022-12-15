var navbar = document.getElementById("navbar");
var header = document.getElementById("header");

function setNavbarMargin(){
    header.style.marginTop = navbar.offsetHeight + "px";
}

$( window ).resize(function() {
    setNavbarMargin();
});

$(window).ready(function () {
    setNavbarMargin();
});
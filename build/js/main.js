window.$ = window.jQuery = require("jquery");
window.Popper = require("popper.js");
require("bootstrap");
require("slick-carousel");

$(document).ready(function () {
  console.log("AQ Academy Theme");

  menuDropdown();
});

$(window).scroll(function () {
  onScroll();
});

// main function
function menuDropdown() {
  $(".menu-on").click(function (e) {
    $(this).addClass("d-none");
    $(".menu-off").addClass("d-block");
    $(".mobile-navbar").addClass("d-block");
    $(".overlay-header").addClass("d-block");
  });
  $(".menu-off").click(function (e) {
    $(this).removeClass("d-block");
    $(".menu-on").removeClass("d-none");
    $(".mobile-navbar").removeClass("d-block");
    $(".overlay-header").removeClass("d-block");
  });
  $(".overlay-header").click(function (e) {
    $(".menu-off").removeClass("d-block");
    $(".menu-on").removeClass("d-none");
    $(".mobile-navbar").removeClass("d-block");
    $(".overlay-header").removeClass("d-block");
  });

  $("#scroll-top").click(function (e) {
    $("html, body").scrollTop($(".app").offset().top);
  });
}

function onScroll() {
  var header = document.querySelector(".header");
  var headerLogo = document.querySelector(".header-logo");
  var logoFixed = document.querySelector(".logo-fixed");
  var navbar = document.querySelector(".navbar");
  var navbarInfo = document.querySelector(".navbar-info");
  var headerContainer = document.querySelector(".header_container");
  var btnFixed = document.querySelector(".btn-fixed");
  if (this.scrollY > header.clientHeight) {
    header.classList.add("fixed");
    logoFixed.classList.remove("d-none");
    headerLogo.classList.remove("d-block");
    navbar.classList.remove("navbar-top");
    navbarInfo.classList.remove("navbar-left");
    headerContainer.classList.remove("header-top");
    btnFixed.classList.add("fixed-on");
    return;
  } else {
    header.classList.remove("fixed");
    logoFixed.classList.add("d-none");
    headerLogo.classList.add("d-block");
    navbar.classList.add("navbar-top");
    navbarInfo.classList.add("navbar-left");
    headerContainer.classList.add("header-top");
    btnFixed.classList.remove("fixed-on");
    return;
  }
}

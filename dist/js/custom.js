/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************!*\
  !*** ./build/js/custom.js ***!
  \****************************/
$(document).ready(function () {
  addTopLi();
  courseSlider();
  cleanContactFrom7();
  fixContactFrom7ResponseOutput();
  changeFontAQ();
});

/**
 * Course slider
 * @return {void}
 * @link https://kenwheeler.github.io/slick/
 */
function courseSlider() {
  $("#course-slider").slick({
    dots: true,
    speed: 300,
    slidesToShow: 1,
    arrows: false,
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 2000
  });
}

/**
 * Add TOP li to mobile menu
 * @return {void}
 */
function addTopLi() {
  var menuMobile = $(".mobile-navbar #primary-menu");
  var topLi = "<li><a href='/'>TOP</a></li>";
  var contactLi = "<li><a href='/contact'>お問い合わせ</a></li>";
  var menuContent = menuMobile.html();
  menuMobile.html(topLi + menuContent + contactLi);
}

/**
 * Add Font AQ li to menu
 * @return {void}
 */
function changeFontAQ() {
  $(".navbar-list li a").each(function (index) {
    var text = $(this).text().replace("AQ", '<span class="font-bold-aq">AQ</span>');
    $(this).html(text);
  });
  $(".mobile-navbar-list li a").each(function (index) {
    var text = $(this).text().replace("AQ", '<span class="font-bold-aq">AQ</span>');
    $(this).html(text);
  });
}

/**
 * Clean contact form 7
 * remove all unnecessary p, br, label tags
 * change tag of wpcf7-list-item-label from span to label
 * set select option with empty value to "- - -"
 * @return {void}
 */
function cleanContactFrom7() {
  var contactForm = $(".wpcf7-form");
  contactForm.find("p:not([class])").contents().unwrap();
  contactForm.find("label:not([class])").contents().unwrap();
  contactForm.find("br").remove();
  var listItems = contactForm.find(".wpcf7-list-item-label");
  listItems.each(function () {
    var item = $(this);
    item.replaceWith(function () {
      return $("<label />", {
        html: item.html()
      });
    });
  });
  var select = contactForm.find("select");
  select.find('option[value=""]').text("- - -");
}

/**
 * add contact form 7 response output functionality
 * add close button
 * add show class
 * remove show class after 3 seconds
 * @return {void}
 */
function fixContactFrom7ResponseOutput() {
  $(".wpcf7-response-output").each(function () {
    if ($(this).text().length > 0) {
      $(this).addClass("show");
    }
    setTimeout(function () {
      $(".wpcf7-response-output").removeClass("show");
    }, 3000);
    if ($(".wpcf7-response-output__close").length == 0) {
      $(this).append('<span class="wpcf7-response-output__close"></span>');
    }
    $(".wpcf7-response-output__close").click(function (e) {
      e.preventDefault();
      $(this).parent().removeClass("show");
      $(this).remove();
    });
  });
  $(".wpcf7-response-output").on("DOMSubtreeModified propertychange", function () {
    $(this).addClass("show");
    setTimeout(function () {
      $(".wpcf7-response-output").removeClass("show");
    }, 3000);
    if ($(".wpcf7-response-output__close").length == 0) {
      $(this).append('<span class="wpcf7-response-output__close"></span>');
    }
    $(".wpcf7-response-output__close").click(function (e) {
      e.preventDefault();
      $(this).parent().removeClass("show");
      $(this).remove();
    });
  });
}
/******/ })()
;
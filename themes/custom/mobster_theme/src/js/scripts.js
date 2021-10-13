// import "../../assets/libraries/selection-sharer/selection-sharer.css";
// import SelectionSharer from "../../assets/libraries/selection-sharer/selection-sharer.js";
// import initScrollMagic from "./scroll-magic";
// import initMain from "./main.js";
// import initSlick from "./slick.js";
// import replaceToken from "./modules/replaceToken";

(function($, Drupal) {
  $(document).ready(function() {
    wow = new WOW();
    wow.init();

    //menu 
    $( ".navbar-toggler" ).click(function() {
      $( "header .navigation .menu" ).toggle("active");
    });
  });
})(jQuery, Drupal);

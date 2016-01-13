(function(){

  // var boton = document.querySelectorAll('.js-social-share');
  // console.log(boton);

}.call(this));

jQuery(document).ready(function($) {

  // Remove the auto generated tags from Contact Form 7
  var cf7Clear = $(".wpcf7-form");
  cf7Clear.find("p").contents().unwrap();
  cf7Clear.find("span").contents().unwrap();
  cf7Clear.find("br").remove();

  // Ham Menu
  $('#m').on('click', function () {
    $('.site-nav__main').toggleClass('active');
  });

  // Fit Vids
  $("body").fitVids();

});

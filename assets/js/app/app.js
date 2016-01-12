(function(){

  // var boton = document.querySelectorAll('.js-social-share');
  // console.log(boton);

}.call(this));

jQuery(document).ready(function($) {

  // Ham Menu
  $('#m').on('click', function () {
    $('.site-nav__main').toggleClass('active');
  });

  // Fit Vids
  $("body").fitVids();

});

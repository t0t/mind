(function(){
var boton = document.querySelector('#m');
console.log(boton);
}.call(this));


    
jQuery(document).ready(function($) {


  // Ham Menu
  $('#m').on('click', function () {
    $('.site-nav__main').toggleClass('active');
  });


  console.log('_');



















});


jQuery(document).ready(function($) {

// Declaro elemento
var elBtn = document.getElementById('Id');
// La Accion
var accion = function () {
  if ( elBtn.name == 'on' ) {
    elBtn.checked = true;
    elBtn.name = 'off';
    elBtn.className = 'hammenu';
  } else {
    elBtn.checked = false;
    elBtn.name = 'on';
    elBtn.className = 'hammenu active';
    // console.log(elBtn.checked);
  }
};
// Asigno acción al elemento
elBtn.addEventListener('click', accion);




// Ham Menu
// $('.hammenu').on('click', function () {
//   $('.nav').toggleClass('active');
//   return $('.nav-menu').toggleClass('hidden');
// });

  // Navigation
  // Select active item

  var navButton = $( '.site-nav li a' );
  // var text = $( '.site-nav li' ).text();
  var pathName = window.location.href;
  // var pathName = window.location.pathname.split('/')[1];


  for (var i = 0; i < navButton.length; i++) {
    console.log( navButton[i] );
    var hRef = navButton[i];
    if (pathName === hRef) {
      console.log('matches');
    }
  }

  console.log( pathName );



});

//# sourceMappingURL=build.js.map
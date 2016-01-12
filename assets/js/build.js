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

/*global jQuery */
/*jshint browser:true */
/*!
* FitVids 1.1
*
* Copyright 2013, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
* Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
* Released under the WTFPL license - http://sam.zoy.org/wtfpl/
*
*/

(function( $ ){

  "use strict";

  $.fn.fitVids = function( options ) {
    var settings = {
      customSelector: null
    };

    if(!document.getElementById('fit-vids-style')) {
      // appendStyles: https://github.com/toddmotto/fluidvids/blob/master/dist/fluidvids.js
      var head = document.head || document.getElementsByTagName('head')[0];
      var css = '.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}';
      var div = document.createElement('div');
      div.innerHTML = '<p>x</p><style id="fit-vids-style">' + css + '</style>';
      head.appendChild(div.childNodes[1]);
    }

    if ( options ) {
      $.extend( settings, options );
    }

    return this.each(function(){
      var selectors = [
        "iframe[src*='player.vimeo.com']",
        "iframe[src*='youtube.com']",
        "iframe[src*='youtube-nocookie.com']",
        "iframe[src*='kickstarter.com'][src*='video.html']",
        "object",
        "embed"
      ];

      if (settings.customSelector) {
        selectors.push(settings.customSelector);
      }

      var $allVideos = $(this).find(selectors.join(','));
      $allVideos = $allVideos.not("object object"); // SwfObj conflict patch

      $allVideos.each(function(){
        var $this = $(this);
        if (this.tagName.toLowerCase() === 'embed' && $this.parent('object').length || $this.parent('.fluid-width-video-wrapper').length) { return; }
        var height = ( this.tagName.toLowerCase() === 'object' || ($this.attr('height') && !isNaN(parseInt($this.attr('height'), 10))) ) ? parseInt($this.attr('height'), 10) : $this.height(),
            width = !isNaN(parseInt($this.attr('width'), 10)) ? parseInt($this.attr('width'), 10) : $this.width(),
            aspectRatio = height / width;
        if(!$this.attr('id')){
          var videoID = 'fitvid' + Math.floor(Math.random()*999999);
          $this.attr('id', videoID);
        }
        $this.wrap('<div class="fluid-width-video-wrapper"></div>').parent('.fluid-width-video-wrapper').css('padding-top', (aspectRatio * 100)+"%");
        $this.removeAttr('height').removeAttr('width');
      });
    });
  };
// Works with either jQuery or Zepto
})( window.jQuery || window.Zepto );


jQuery(document).ready(function($) {

// Declaro elemento
var elBtn = document.getElementById('Id');
var elHtml = document.getElementsByTagName('html')[0];
// La Accion
var accion = function () {
  if ( elBtn.name == 'off' ) {
    elBtn.checked = true;
    elBtn.name = 'on';
    elBtn.className = 'hammenu';
    elHtml.className = 'overflow';
    // console.log(elHtml);
  } else {
    elBtn.checked = false;
    elBtn.name = 'off';
    elBtn.className = 'hammenu active';
    elHtml.className = '';
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

function windowPopup (url, width, height) {
  // Calculate the position of the popup so it’s centered on the screen.
  var left = (screen.width / 2) - (width / 2),
  top = (screen.height / 2) - (height / 2);
  window.open( url, "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=" + width + ",height=" + height + ",top=" + top + ",left=" + left );
}
jQuery(document).ready(function($) {

  // Open Popup
  $(".js-social-share").on("click", function(e) {
    e.preventDefault();
    windowPopup($(this).attr("href"), 500, 300);
  });

  // var jsSocialShares = document.querySelectorAll( ".js-social-share" );
  // if (jsSocialShares) {
  //   [].forEach.call(jsSocialShares, function(anchorPop) {
  //     anchorPop.addEventListener( "click", function(e) {
  //       e.preventDefault();
  //       windowPopup( this.href, 500, 300 );
  //       console.log( 'windowPopup' );
  //     });
  //   });
  // }

});

//# sourceMappingURL=build.js.map
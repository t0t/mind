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

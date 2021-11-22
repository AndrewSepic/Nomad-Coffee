jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function($) {

  // Animate Hamburger
  $(".hamburger").click(function(){
    $(this).toggleClass("is-active");
  });

  // On Off-Canvas close, toggle hamburger back to defauly state
  //jQuery(document).on('closed.zf.offcanvas', '[data-offcanvas]', function() {
    //jQuery(".hamburger").removeClass("is-active");
    //console.log("off canvas closed!");
  //});

  $(".off-canvas").on("closed.zf.offcanvas", function(e) {
    e.preventDefault();
    $(".hamburger").removeClass("is-active");
    console.log("off canvas closed!");
  });
    // Remove empty P tags created by WP inside of Accordion and Orbit
    $('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	$('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  $('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( $(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      $(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      $(this).wrap("<div class='flex-video'/>");
    }
  });

  scrollTo();

  function scrollTo() {
    $('a.find').click(function(e){
    e.preventDefault();
    $('html, body').animate({
     scrollTop: $("div.locationHours").offset().top
    }, 1500);
  })
  }

});

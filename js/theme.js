$(document).ready(function() {
	$('.comments-area').hide();

 	$('#comment-section').click(function(event) {
 		/* Act on the event */
 		event.preventDefault();
 		$('.comments-area').toggle(400);
 	});

 	$('.comments-area').hover(function() {
        $(this).css('cursor','pointer');
    });

    $('.rss-widget-icon').hide() ;

    $('table').addClass('table table-condensed table-striped');

 }); 

  $("#shareIcons").jsSocials({
    	shareIn: "popup",
	    showLabel: false,
	    showCount: false,
	    shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon"]
	});

	$("#share").jsSocials({
		shareIn: "popup",
	    showCount: true,
	    showLabel: true,
	    shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon"]
	});

var amountScrolled = 300;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});

$('a.back-to-top').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});
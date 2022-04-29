function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 2000, function() {
            $active.removeClass('active last-active');
        });
};

$(function() {
    setInterval( "slideSwitch()", 6000 );
});

/* next one */

     $(document).ready(function() {

	/* This is basic - uses default settings */
	
	$("a#single_image").fancybox();
	
	/* Using custom settings */
	
	$("a#inline").fancybox({
		'hideOnContentClick': true
	});

	/* lskLSslSLJK */
	
	$("a.iframe").fancybox({
		'hideOnContentClick':	false,
		'hideOnOverlayClick':	false,
		'width'				:	800,
		'height'			:	500,
		'overlayShow'		:	true,
		'type'				:	'iframe'
	});
	
	$("#calendarshow").fancybox({
		'hideOnContentClick':	false,
		'transitionIn'		:	'elastic',
		'transitionOut'		:	'elastic',
		'width'				:	800,
		'height'			:	500,
		'overlayShow'		:	true,
		'type'				:	'iframe' 
	});

	/* Apply fancybox to multiple items */
	
	$("a.group").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
	
	$("#updater").fancybox({
		'hideOnContentClick':	false,
		'hideOnOverlayClick':	false,
		'width'				:	800,
		'height'			:	500,
		'overlayShow'		:	true,
		'type'				:	'iframe',
		'onClosed': function() {
			parent.location.reload(true);
		}
	});
	
});

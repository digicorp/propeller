
/*!
 * Propeller v1.1.0 (http://propeller.in): checkbox.js
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

$( document ).ready(function() {
	$('.pmd-checkbox input').after('<span class="pmd-checkbox-label">&nbsp;</span>');
	// Ripple Effect //
	$(".pmd-checkbox-ripple-effect").on('mousedown', function(e) {
		var rippler = $(this);
		$('.ink').remove();
		// create .ink element if it doesn't exist
		if(rippler.find(".ink").length === 0) {
			rippler.append('<span class="ink"></span>');
		}
		var ink = rippler.find(".ink");
		// prevent quick double clicks
		ink.removeClass("animate");
		// set .ink diametr
		if(!ink.height() && !ink.width())
		{
		//	var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
			ink.css({height: 20, width: 20});
		}
		// get click coordinates
		var x = e.pageX - rippler.offset().left - ink.width()/2;
		var y = e.pageY - rippler.offset().top - ink.height()/2;
		// set .ink position and add class .animate
		ink.css({
		  top: y+'px',
		  left:x+'px'
		}).addClass("animate");
		setTimeout(function(){ 
			ink.remove();
		}, 1500);
	})
})	
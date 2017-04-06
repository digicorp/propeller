
/*!
 * Propeller v1.1.0 (http://propeller.in): popover.js
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

$(document).ready(function(){
		
		$('.popover-html[data-toggle="popover"]').popover({
			html: true,
			content : function(){
				var currentID = $(this).attr("data-id");
				var currentHTML = $(currentID).html();
				return currentHTML;
			},
			placement: function(pop, dom_el){
				var range = 200; 
				var curPlacement = $(dom_el).attr("data-placement");
				var scrolled = $(window).scrollTop();
				var winWidth = $(window).width();
				var winHeight = $(window).height();
				var elWidth = $(dom_el).outerWidth();
				var elHeight = $(dom_el).outerHeight();
				var elTop =  $(dom_el).offset().top;
				var elLeft =  $(dom_el).offset().left;
				var curPosTop =  elTop - scrolled;
				var curPosLeft =  elLeft;
				var curPosRight = winWidth - curPosLeft - elWidth;
				var curPosBottom = winHeight - curPosTop - elHeight;
				if(curPlacement == "left" && curPosLeft <= range){
					return 'right';	
				}
				else if(curPlacement == "right" && curPosRight <= range){
					return 'left';	
				}
				else if(curPlacement == "top" && curPosTop <= range){
					return 'bottom';	
				}
				if(curPlacement == "bottom" && curPosBottom <= range){
					return 'top';	
				}else {
					return curPlacement;
				}
			}
		});
	
		var options = {
			placement: function(pop, dom_el){
				var range = 200; 
				var curPlacement = $(dom_el).attr("data-placement");
				var scrolled = $(window).scrollTop();
				var winWidth = $(window).width();
				var winHeight = $(window).height();
				var elWidth = $(dom_el).outerWidth();
				var elHeight = $(dom_el).outerHeight();
				var elTop =  $(dom_el).offset().top;
				var elLeft =  $(dom_el).offset().left;
				var curPosTop =  elTop - scrolled;
				var curPosLeft =  elLeft;
				var curPosRight = winWidth - curPosLeft - elWidth;
				var curPosBottom = winHeight - curPosTop - elHeight;
				if(curPlacement == "left" && curPosLeft <= range){
					return 'right';	
				}
				else if(curPlacement == "right" && curPosRight <= range){
					return 'left';	
				}
				else if(curPlacement == "top" && curPosTop <= range){
					return 'bottom';	
				}
				if(curPlacement == "bottom" && curPosBottom <= range){
					return 'top';	
				}else {
					return curPlacement;
				}
			}
		};
	
		$('[data-toggle="popover"]').popover(options);
	
		$('[data-toggle="popover"]').on('shown.bs.popover', function () {
			var colorClass = $(this).attr("data-color");
			$(".popover").addClass(colorClass);
		}).on('hidden.bs.popover', function () {
			var colorClass = $(this).attr("data-color");
			$(".popover").removeClass(colorClass);
			
		});
		
	});
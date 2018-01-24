
/**
 * --------------------------------------------------------------------------
 * Propeller v1.2.0 (http://propeller.in): popover.js
 * Copyright 2016-2018 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 * --------------------------------------------------------------------------
 */

var pmdPopover = function ($) {
    
	
   /**
	* ------------------------------------------------------------------------
	* Variables
	* ------------------------------------------------------------------------
	*/

    var NAME = 'pmdPopover';
    var JQUERY_NO_CONFLICT = $.fn[NAME];

    var Selector = {
        PARENT_SELECTOR: '',
        POPOVER_HTML_DATA_TOGGLE: '.popover-html[data-toggle="popover"]',
        DATA_TOGGLE: '[data-toggle="popover"]',
        POPOVER: '.popover'
    };

    var Event = {
        CLICK: 'click',
        SHOW_BS_POPOVER: 'shown.bs.popover',
        HIDE_BS_POPOVER: 'hidden.bs.popover'
    };	

	
   /**
	* ------------------------------------------------------------------------
	* Functions
	* ------------------------------------------------------------------------
	*/
	
    function  placementFunction(pop, dom_el) {
		var range = 200;
		var curPlacement = $(dom_el).attr("data-placement");
		var scrolled = $(window).scrollTop();
		var winWidth = $(window).width();
		var winHeight = $(window).height();
		var elWidth = $(dom_el).outerWidth();
		var elHeight = $(dom_el).outerHeight();
		var elTop = $(dom_el).offset().top;
		var elLeft = $(dom_el).offset().left;
		var curPosTop = elTop - scrolled;
		var curPosLeft = elLeft;
		var curPosRight = winWidth - curPosLeft - elWidth;
		var curPosBottom = winHeight - curPosTop - elHeight;
		if (curPlacement === "left" && curPosLeft <= range) {
			return 'right';
		}
		else if (curPlacement === "right" && curPosRight <= range) {
			return 'left';
		}
		else if (curPlacement === "top" && curPosTop <= range) {
			return 'bottom';
		}
		if (curPlacement === "bottom" && curPosBottom <= range) {
			return 'top';
		} else {
			return curPlacement;
		}
	}
	
    var popoverHtmlDataToggleOptions = {
        html: true,
        content: function () {
            var currentID = $(this).attr("data-id");
            var currentHTML = $(currentID).html();
            return currentHTML;
        },
        placement: placementFunction
    };

    var dataToggleOptions = {
        placement: placementFunction
    };

	
   /**
	* ------------------------------------------------------------------------
	* Initialization
	* ------------------------------------------------------------------------
	*/
	
    var pmdPopover = function () {
        function pmdPopover() {
            $(Selector.POPOVER_HTML_DATA_TOGGLE).popover(popoverHtmlDataToggleOptions);
            $(Selector.DATA_TOGGLE).popover(dataToggleOptions);
            $(Selector.DATA_TOGGLE).on(Event.SHOW_BS_POPOVER, function (e) {
                var colorClass = $(e.target).attr("data-color");
                $(Selector.POPOVER).addClass(colorClass);
            }).on(Event.HIDE_BS_POPOVER, function (e) {
                var colorClass = $(e.target).attr("data-color");
                $(Selector.POPOVER).removeClass(colorClass);
            });
        }
        return pmdPopover;
    } ();

	
   /**
	* ------------------------------------------------------------------------
	* jQuery
	* ------------------------------------------------------------------------
	*/
	
    var plugInFunction = function () {
        if (this.selector !== "") {
        	Selector.PARENT_SELECTOR = this.selector;
        }
        new pmdPopover();
    };
    $.fn[NAME] = plugInFunction;
    return pmdPopover;

} (jQuery)();
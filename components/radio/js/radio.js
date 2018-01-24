
/**
 * --------------------------------------------------------------------------
 * Propeller v1.2.0 (http://propeller.in): radio.js
 * Copyright 2016-2018 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 * --------------------------------------------------------------------------
 */

var pmdRadio = function ($) {
	
	
   /**
	* ------------------------------------------------------------------------
	* Variables
	* ------------------------------------------------------------------------
	*/

    var NAME = 'pmdRadio';
    var JQUERY_NO_CONFLICT = $.fn[NAME];

    var ClassName = {
        ANIMATE: 'animate',
        PMD_RADIO: 'pmd-radio',
        PM_INI: "pm-ini"
    };

    var Selector = {
        PARENT_SELECTOR: '',
		PMD_RADIO: '.' + ClassName.PMD_RADIO ,
        INPUT: 'input:radio:not(.pm-ini)',
        RIPPLE: '.pmd-radio-ripple-effect',
        INK: '.ink'
    };

    var Template = {
        RADIO_LABEL: '<span class="pmd-radio-label">&nbsp;</span>',
        SPAN_LINK: '<span class="ink"></span>'
    };

    var Event = {
        MOUSE_DOWN: 'mousedown'
    };


   /**
	* ------------------------------------------------------------------------
	* Functions
	* ------------------------------------------------------------------------
	*/
	
    function onMouseDown(e) {
        var $this = $(e.target);
        var rippler = $this;
        $(Selector.INK).remove();
        // create .ink element if it doesn't exist
        if (rippler.find(Selector.INK).length === 0) {
            rippler.append('<span class="ink"></span>');
        }
        var ink = rippler.find(Selector.INK);
        // prevent quick double clicks
        ink.removeClass(ClassName.ANIMATE);
        // set .ink diametr
        if (!ink.height() && !ink.width()) {
            var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
            ink.css({ height: 15, width: 15 });
        }
        // get click coordinates
        var x = e.pageX - rippler.offset().left - ink.width() / 2;
        var y = e.pageY - rippler.offset().top - ink.height() / 2;
        // set .ink position and add class .animate
        ink.css({
            top: y + 'px',
            left: x + 'px'
        }).addClass(ClassName.ANIMATE);
        setTimeout(function () {
            ink.remove();
        }, 1500);
    }
	
   /**
	* ------------------------------------------------------------------------
	* Initialization
	* ------------------------------------------------------------------------
	*/
	
    var pmdRadio = function () {
        _inherits(pmdRadio, commons);
        function pmdRadio() {
            var finalSelector = pmdRadio.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.PMD_RADIO);
            $(finalSelector).find(Selector.INPUT).after(Template.RADIO_LABEL);
            $(finalSelector).find(Selector.INPUT).addClass(ClassName.PM_INI);
        }
        return pmdRadio;
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
        new pmdRadio();
    };
    $(document).on(Event.MOUSE_DOWN, Selector.RIPPLE, onMouseDown);
    $.fn[NAME] = plugInFunction;
    return pmdRadio;
	
} (jQuery)();

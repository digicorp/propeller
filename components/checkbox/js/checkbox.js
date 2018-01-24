
/**
 * --------------------------------------------------------------------------
 * Propeller v1.2.0 (http://propeller.in): checkbox.js
 * Copyright 2016-2018 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 * --------------------------------------------------------------------------
 */

var pmdCheckBox = function ($) {
	
	
	/**
	* ------------------------------------------------------------------------
	* Variables
	* ------------------------------------------------------------------------
	*/

	var NAME = 'pmdCheckBox';
	var JQUERY_NO_CONFLICT = $.fn[NAME];

	var ClassName = {
		ANIMATE: 'animate',
		PMD_CHECKBOX: 'pmd-checkbox',
		TEXTFIELD_FOCUS: 'pmd-textfield-focused'
	};

	var Selector = {
		PARENT_SELECTOR: '',
		PMD_CHECKBOX: '.' + ClassName.PMD_CHECKBOX,
		INPUT: 'input:checkbox:not(.pm-ini)',
		RIPPLE: '.pmd-checkbox-ripple-effect',
		INK: '.ink'
	};

	var Template = {
		CHECK_BOX_LABEL: '<span class="pmd-checkbox-label">&nbsp;</span>',
		SPAN_LINK: '<span class="ink"></span>'
	};

	var Event = {
		CLICK: 'click',
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
			rippler.append(Template.SPAN_LINK);
		}
		var ink = rippler.find(Selector.INK);
		// prevent quick double clicks
		ink.removeClass(ClassName.ANIMATE);
		// set .ink diametr
		if (!ink.height() && !ink.width()) {
			var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
				ink.css({
				height: 20,
				width: 20
			});
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
	
	var pmdCheckBox = function () {
		_inherits(pmdCheckBox, commons);
		function pmdCheckBox() {
			var finalSelector = pmdCheckBox.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.PMD_CHECKBOX);
			$(finalSelector).find(Selector.INPUT).after(Template.CHECK_BOX_LABEL);
			$(finalSelector).find(Selector.INPUT).addClass("pm-ini");
		}
		return pmdCheckBox;
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
		new pmdCheckBox();
	};
	$(document).on(Event.MOUSE_DOWN, Selector.RIPPLE, onMouseDown);
	$.fn[NAME] = plugInFunction;
	return pmdCheckBox;
	
} (jQuery)();

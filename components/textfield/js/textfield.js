
/**
 * --------------------------------------------------------------------------
 * Propeller v1.2.0 (http://propeller.in): textfield.js
 * Copyright 2016-2018 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 * --------------------------------------------------------------------------
 */

var pmdTextfield = function ($) {		
	
	
   /**
	* ------------------------------------------------------------------------
	* Variables
	* ------------------------------------------------------------------------
	*/

	var NAME = 'pmdTextfield';
	var JQUERY_NO_CONFLICT = $.fn[NAME];

	var ClassName = {
		PMD_TEXTFIELD: 'pmd-textfield',
		FOCUS: 'pmd-textfield-focused',
		FLOATING_COMPLETE: 'pmd-textfield-floating-label-completed',
		FLOATING_ACTIVE: 'pmd-textfield-floating-label-active'
	};

	var Selector = {
		PARENT_SELECTOR: '',
		PMD_TEXTFIELD: '.' + ClassName.PMD_TEXTFIELD,
		FOCUS: '.' + ClassName.FOCUS,
		INPUT: '.form-control'
	};

	var Template = {
		LABEL: '<span class="pmd-textfield-focused"></span>'
	};

	var Event = {
		FOCUS: 'focus',
		FOCUSOUT: 'focusout',
		CHANGE: 'change'
	};	

	/**
	* ------------------------------------------------------------------------
	* Functions
	* ------------------------------------------------------------------------
	*/

	function onFocus(e) {
		var $this = $(e.target);
		$this.closest(Selector.PMD_TEXTFIELD).addClass(ClassName.FLOATING_ACTIVE + " " + ClassName.FLOATING_COMPLETE);
	}

	function onFocusOut(e) {
		var $this = $(e.target);
		if ($this.val() === "") {
			$this.closest(Selector.PMD_TEXTFIELD).removeClass(ClassName.FLOATING_COMPLETE);
		}
		$this.closest(Selector.PMD_TEXTFIELD).removeClass(ClassName.FLOATING_ACTIVE);
	}

	function onChange(e) {
		var $this = $(e.target);
		if ($this.val() !== "") {
			$this.closest(Selector.PMD_TEXTFIELD).addClass(ClassName.FLOATING_COMPLETE);
		}
	}

	
   /**
	* ------------------------------------------------------------------------
	* Initialization
	* ------------------------------------------------------------------------
	*/

	var pmdTextfield = function () {
		_inherits(pmdTextfield, commons);
		function pmdTextfield() {
			$(pmdTextfield.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.FOCUS)).remove();
			$(pmdTextfield.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.PMD_TEXTFIELD)).find(Selector.INPUT).after(Template.LABEL);
			$(pmdTextfield.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.PMD_TEXTFIELD)).find(Selector.INPUT).each(function () {
				if ($(this).val() !== "") {
					$(this).closest(Selector.PMD_TEXTFIELD).addClass(ClassName.FLOATING_COMPLETE);
				}
			});
		}
		return pmdTextfield;
	}();

	
   /**
	* ------------------------------------------------------------------------
	* jQuery
	* ------------------------------------------------------------------------
	*/
	
	var plugInFunction = function () {
		if (this.selector !== "") {
		  Selector.PARENT_SELECTOR = this.selector;
		}
		new pmdTextfield();
	};
	$(document).on(Event.CHANGE, Selector.PMD_TEXTFIELD + " " + Selector.INPUT, onChange);
	$(document).on(Event.FOCUS, Selector.PMD_TEXTFIELD + " " + Selector.INPUT, onFocus);
	$(document).on(Event.FOCUSOUT, Selector.PMD_TEXTFIELD + " " + Selector.INPUT, onFocusOut);
	$.fn[NAME] = plugInFunction;
	return pmdTextfield;
  
} (jQuery)();

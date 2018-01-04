
/*!
 * Propeller v1.2.0 (http://propeller.in): accordion.js
 * Copyright 2016-2018 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

var pmdAccordion = function ($) {

	
	/**
	 * ------------------------------------------------------------------------
	 * Variables
     * ------------------------------------------------------------------------
     */

	var NAME = 'pmdAccordion';
    var JQUERY_NO_CONFLICT = $.fn[NAME];

    var ClassName = {
        IN: 'in',
        ACTIVE: 'active'
    };

    var Selector = {
        PARENT_SELECTOR:'',
        DATA_TOGGLE_COLLAPSE: 'a[data-toggle="collapse"]',
        COLLAPSE_IN: '.collapse.in',
        ACTIVE: '.' + ClassName.ACTIVE,
        PANEL: '.panel',
        EXPANDALL: '#expandAll',
        COLLAPSEALL: '#collapseAll'
    };

    var Event = {
        CLICK: 'click'
    };
	

	/**
     * ------------------------------------------------------------------------
     * Functions
     * ------------------------------------------------------------------------
     */

	function applyCollapse(e) {
        var $this = $(e.target);
        var objectID = $this.attr('href');
        var expandable = $this.attr('data-expandable');
        var expanded = $this.attr("aria-expanded");
        var current = $this.closest('.pmd-accordion').attr("id");
        if (expandable === 'true') {
			if (expanded === "true") {
				$this.parents(Selector.PANEL).removeClass(ClassName.ACTIVE);
			}
			else {
				$this.parents(Selector.PANEL).addClass(ClassName.ACTIVE);
            }
            if ($(objectID).hasClass(ClassName.IN)) {
				$(objectID).collapse('hide');
            }
            else {
            	$(objectID).collapse('show');
            }
        } else {
            if (expanded === "true") {
                $("#" + current + " " + Selector.ACTIVE).removeClass(ClassName.ACTIVE);
            }
            else {
                $("#" + current + " " + Selector.ACTIVE).removeClass(ClassName.ACTIVE);
                $this.parents(Selector.PANEL).addClass(ClassName.ACTIVE);
            }
        }
    }

    function expandAll(e) {
        var $this = $(e.target);
        var targetId = $this.attr("data-target");
        $('#' + targetId + ' ' + Selector.DATA_TOGGLE_COLLAPSE).each(function (i,event) {
            var $this = $(event);
            var objectID = $this.attr('href');
            if ($(objectID).hasClass(ClassName.IN) === false) {
                $(objectID).collapse('show');
                $(objectID).parent().addClass(ClassName.ACTIVE);
            }
        });
    }

    function collapseAll(e) {
        var $this = $(e.target);
        var targetId = $this.attr("data-target");
        $('#' + targetId + ' ' + Selector.DATA_TOGGLE_COLLAPSE).each(function (i,event) {
            var $this = $(event);
            var objectID = $this.attr('href');
            $(objectID).collapse('hide');
            $(objectID).parent().removeClass(ClassName.ACTIVE);
        });
    }

	
	/**
	 * ------------------------------------------------------------------------
	 * Initialization
	 * ------------------------------------------------------------------------
	 */
	
    var pmdAccordion = function () {
        _inherits(pmdAccordion, commons);
        function pmdAccordion() {
            $(pmdAccordion.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.COLLAPSE_IN)).parents(Selector.PANEL).addClass(ClassName.ACTIVE);
            $(pmdAccordion.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.DATA_TOGGLE_COLLAPSE)).off(Event.CLICK);
            $(pmdAccordion.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.DATA_TOGGLE_COLLAPSE)).on(Event.CLICK, applyCollapse);
            $(pmdAccordion.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.EXPANDALL)).off(Event.CLICK);
            $(pmdAccordion.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.EXPANDALL)).on(Event.CLICK, expandAll);
            $(pmdAccordion.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.COLLAPSEALL)).off(Event.CLICK);
            $(pmdAccordion.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.COLLAPSEALL)).on(Event.CLICK, collapseAll);
        }
        return pmdAccordion;
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
        new pmdAccordion();
    };
    $.fn[NAME] = plugInFunction;
    return pmdAccordion;

} (jQuery)();


/*!
 * Propeller v1.2.0 (http://propeller.in)
 * Copyright 2016-2018 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

"use strict";

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

// Attach Parent Selector
var commons = function () {
	
	function commons() {}
	commons.attachParentSelector = function (parentSelector, defaultSelector) {
		var customSelector = defaultSelector;
		if (parentSelector !== '' && parentSelector.length > 0) {
			if (parentSelector === defaultSelector) {
				customSelector = defaultSelector;
			} else if ($(parentSelector).hasClass(defaultSelector)) {
				customSelector = parentSelector + "" + defaultSelector;
			} else {
				customSelector = parentSelector + " " + defaultSelector;
			}
		}
		return customSelector;
	};
	return commons;
};

// Inherit one class to another
function _inherits(SubClass, SuperClass) {
	if (typeof SuperClass !== "function" && SuperClass !== null) {
		throw new TypeError("Super expression must either be null or a function, not " + typeof SuperClass);
	}
	SubClass.prototype = new SuperClass();
}

// Propeller components Mapping
var propellerControlMapping = {
	"pmd-checkbox": function () {
		$('.pmd-checkbox').pmdCheckBox();
	},
	"pmd-radio": function () {
		$('.pmd-radio').pmdRadio();
	},
	"pmd-textfield": function () {
		$('.pmd-textfield').pmdTextfield();
	},
	"pmd-dropdown": function () {
		$('.pmd-dropdown').pmdDropdown();
	},
	"pmd-alert-toggle": function () {
		$('.pmd-alert-toggle').pmdAlert();
	},
	"pmd-tabs": function () {
		$('.pmd-tabs').pmdTab();
	},
	"pmd-sidebar": function () {
		$().pmdSidebar();
	},
	"pmd-accordion": function () {
		$('.pmd-accordion').pmdAccordion();
	},
	"pmd-ripple-effect": function () {
		$('.pmd-ripple-effect').pmdButton();
	}
};

// DOM Observer
var observeDOM = (function () {
	var MutationObserver = window.MutationObserver || window.WebKitMutationObserver,
		eventListenerSupported = window.addEventListener;
	return function (obj, callback) {
		if (MutationObserver) {
			// define a new observer
			var obs = new MutationObserver(function (mutations, observer) {
				if (mutations[0].addedNodes.length || mutations[0].removedNodes.length) {
					callback(mutations);
				}
			});
			// have the observer observe foo for changes in children
			obs.observe(obj, {
				childList: true,
				subtree: true,
				attributes: true,
				characterData: true
			});
		} else if (eventListenerSupported) {
			obj.addEventListener('DOMNodeInserted', callback, false);
			obj.addEventListener('DOMNodeRemoved', callback, false);
		}
	};
})();

$(document).ready(function () {
	observeDOM(document.querySelector('body'), function (mutations) {
		
		processMutation(0);
		
		function processMutation(index) {
			if (index >= mutations.length) {
				return;
			}
			var mutation = mutations[index];
			var nodes = mutation.addedNodes;
			processNodes(nodes, function () {
				processMutation(index + 1);
			});
		}
		
		function processNodes(nodes, callback) {
			if (nodes.length === 0) {
				callback();
				return;
			}
			processNode(nodes, 0, function () {
				callback();
			});
		}

		function processNode(nodes, index, callback) {
			if (index >= nodes.length) {
				callback();
				return;
			}
			var node = nodes[index];
			if (containsPmdClassPrefix(node)) {
				if ($(node).attr("data-toggle") !== undefined && $(node).attr("data-toggle").toLowerCase() === "popover") {
					$().pmdPopover();
				}
				var classes = $(node).attr('class');
				if (classes === undefined) {
					callback();
					return;
				}
				classes = classes.split(' ');
				classes.forEach(function (clazz) {
					if (propellerControlMapping[clazz]) {
						propellerControlMapping[clazz]();
						return true;
					}
					return false;
				});
				processNode(nodes, index+1, function() {
					callback();
				});
			} else {

				var childNodes = node.childNodes;
				processNodes(childNodes, function() {
					processNode(nodes, index+1, function() {
						callback();
					});
				});
			}
		}

		function containsPmdClassPrefix(ele) {
			if ($(ele).attr('class') === undefined) {
				return false;
			}
			var classes = $(ele).attr('class').split(' ');
			for (var i = 0; i < classes.length; i++) {
				
				if (propellerControlMapping.hasOwnProperty(classes[i])) {
					return true;	
				}				
			}
			return false;
		}
	});
});


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


/**
 * --------------------------------------------------------------------------
 * Propeller v1.2.0 (http://propeller.in): button.js
 * Copyright 2016-2018 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 * -------------------------------------------------------------------------- 
 */

var pmdButton = function ($) {
	
	
	/**
	 * ------------------------------------------------------------------------
	 * Variables
	 * ------------------------------------------------------------------------
	 */

    var NAME = 'pmdButton';
    var JQUERY_NO_CONFLICT = $.fn[NAME];
    
	var Selector = {
        PARENT_SELECTOR: '',
        PMD_RIPPLE_EFFECT: ".pmd-ripple-effect",
        INK: '.ink'
    };
    
	var ClassName = {
        ANIMATE: "animate"
    };
    
	var Event = {
        MOUSEDOWN: 'mousedown',
        TOUCHSTART: 'touchstart',
    };
    
	var Template = {
        SPAN: "<span class='ink'></span>"
    };

	
	/**
	 * ------------------------------------------------------------------------
	 * Functions
	 * ------------------------------------------------------------------------
	 */

	function onMouseDown(e) {
		var rippler = $(e.target);
		$(Selector.INK).remove();
		// create .ink element if it doesn't exist
		if (rippler.find(Selector.INK).length === 0) {
			rippler.append(Template.SPAN);
		}
		var ink = rippler.find(Selector.INK);
		// prevent quick double clicks
		ink.removeClass(ClassName.ANIMATE);
		// set .ink diametr
		if (!ink.height() && !ink.width()) {
			var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
			ink.css({ height: d, width: d });
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
    var pmdButton = function () {
		_inherits(pmdButton, commons);
        function pmdButton() {
			$(pmdButton.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.PMD_RIPPLE_EFFECT)).on(Event.MOUSEDOWN+" "+Event.TOUCHSTART, onMouseDown);
        }
        return pmdButton;
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
		new pmdButton();
    };
    $.fn[NAME] = plugInFunction;
    return pmdButton;

} (jQuery)();

/*!
 * --------------------------------------------------------------------------
 * Propeller v1.2.0 (http://propeller.in): dropdown.js
 * Copyright 2016-2018 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 * -------------------------------------------------------------------------- 
 */

var pmdDropdown = function ($) {

	
   /**
	* ------------------------------------------------------------------------
	* Variables
	* ------------------------------------------------------------------------
	*/

    var NAME = 'pmdDropdown';
    var JQUERY_NO_CONFLICT = $.fn[NAME];
    var minimumSize = 767;
	
    var ClassName = {
        CENTER: 'pmd-dropdown-menu-center',
        PMD_SIDEBAR_DROPDOWN: 'pmd-sidebar-dropdown',
        RIGHT: 'dropdown-menu-right',
        BG_RIGHT: 'pmd-dropdown-menu-bg-right',
        TOP_LEFT: 'pmd-dropdown-menu-top-left',
        BG_BOTTOM_LEFT: 'pmd-dropdown-menu-bg-bottom-left',
        TOP_RIGHT: 'pmd-dropdown-menu-top-right',
        BG_BOTTOM_RIGHT: 'pmd-dropdown-menu-bg-bottom-right',
        PMD_SIDEBAR: 'pmd-sidebar',
        OPEN: "open",
        PM_INI: "pm-ini"
    };

    var Selector = {
        PARENT_SELECTOR: '',
        DROPDOWN_MENU: '.dropdown-menu',
        RIGHT: '.' + ClassName.RIGHT,
        TOP_LEFT: '.' + ClassName.TOP_LEFT,
        TOP_RIGHT: '.' + ClassName.TOP_RIGHT,
        BG: '.pmd-dropdown-menu-bg',
        DROPDOWN_TOGGLE: '.dropdown-toggle',
        PMD_DROPDOWN: '.pmd-dropdown',
        PMD_SIDEBAR: '.' + ClassName.PMD_SIDEBAR,
        CONTAINER: '.pmd-dropdown-menu-container',
        PMD_DROPDOWN_HOVER: '.pmd-dropdown-hover',
        DATA_TOGGLE_DROPDOWN: '[data-toggle="dropdown"]',
		DROPDOWN_BACKDROP: '.dropdown-backdrop'
    };

    var Template = {
        CONTAINER: "<div class='pmd-dropdown-menu-container'></div>",
        BG: '<div class="pmd-dropdown-menu-bg"></div>'
    };

    var Event = {
        CLICK: 'click',
        SHOW_BS_DROPDOWN: 'show.bs.dropdown',
        HIDE_BS_DROPDOWN: 'hide.bs.dropdown'
    };

	
   /**
	* ------------------------------------------------------------------------
	* Functions
	* ------------------------------------------------------------------------
	*/
	
    function showDropdown(that) {
		var dcdmc = that.closest(Selector.CONTAINER);
		var dcdmbg = dcdmc.find(Selector.BG);
		var w = that.outerWidth();
		var h = that.outerHeight();
		dcdmc.css({ 'width': w + 'px', 'height': h + 'px' });
		dcdmbg.css({ 'width': w + 'px', 'height': h + 'px' });
		setTimeout(function () {
			that.css("clip", "rect(0 " + w + "px " + h + "px 0)");
		}, 10);
        if (that.hasClass(ClassName.RIGHT)) {
			dcdmbg.addClass(ClassName.BG_RIGHT);
			dcdmc.css({ "right": "0", "left": "auto" });
        } else if (that.hasClass(ClassName.TOP_LEFT)) {
			dcdmbg.addClass(ClassName.BG_BOTTOM_LEFT);
        } else if (that.hasClass(ClassName.TOP_RIGHT)) {
			dcdmbg.addClass(ClassName.BG_BOTTOM_RIGHT);
			dcdmc.css({ "right": "0", "left": "auto" });
        }
		$(Selector.DROPDOWN_BACKDROP).off().remove();
    }

    function showBsDropdownDesktop(e) {
        var hassidebar = $(e.target).closest(Selector.PMD_SIDEBAR).hasClass(ClassName.PMD_SIDEBAR);
        var dropdowncenter = $(e.target).find(Selector.DROPDOWN_MENU).hasClass(ClassName.CENTER);
        var that = $(e.target).find(Selector.DROPDOWN_MENU);
        var $dataSidebar = $(e.target).find(Selector.DROPDOWN_TOGGLE).attr("data-sidebar");
		if ($(window).width() < minimumSize) {
            if ($dataSidebar == 'true') {
				that.first().stop(true, true).slideDown(300);
				$(e.target).addClass(ClassName.PMD_SIDEBAR_DROPDOWN);
			} else {
				showDropdown(that);
			}
			$(".pmd-navbar").addClass("minSizeClass");
		} else {
			if (hassidebar) {
				that.first().stop(true, true).slideDown();
			} else if (dropdowncenter) {
				if (!$(e.target).parents().hasClass(ClassName.PMD_SIDEBAR)) {
					$(Selector.DROPDOWN_MENU).removeAttr('style');
				}
				that.first().stop(true, true).slideDown();
			} else {
				showDropdown(that);
			}
            $(".pmd-navbar").removeClass("minSizeClass");
        }
        e.target.closable = false;
    }

    function hideDropdown(that) {
        var dcdmc = that.closest(Selector.CONTAINER);
        var dcdmbg = dcdmc.find(Selector.BG);
        var w = that.outerWidth();
        var h = that.outerHeight();
        that.css("clip", "rect(0 0 0 0)");
        dcdmc.removeAttr('style');
        dcdmbg.removeAttr('style');
        if (that.hasClass(ClassName.RIGHT)) {
            that.css("clip", "rect(0 " + w + "px 0 " + w + "px)");
        } else if (that.hasClass(ClassName.TOP_LEFT)) {
            that.css("clip", "rect(" + h + "px 0 " + h + "px 0)");
        } else if (that.hasClass(ClassName.TOP_RIGHT)) {
            that.css("clip", "rect(" + h + "px " + w + "px " + h + "px " + w + "px)");
        }
    }

    function hideBsDropdownDesktop(e) {
        	var hassidebar = $(e.target).closest(Selector.PMD_SIDEBAR).hasClass(ClassName.PMD_SIDEBAR);
			var dropdowncenter = $(e.target).find(Selector.DROPDOWN_MENU).hasClass(ClassName.CENTER);
			var that = $(e.target).find(Selector.DROPDOWN_MENU);
			if ($(window).width() < minimumSize) {
				var $dataSidebar = $(e.target).find(Selector.DROPDOWN_TOGGLE).attr("data-sidebar");
				if ($dataSidebar == 'true') {
					that.first().stop(true, true).slideUp(300);
				} else {
					hideDropdown(that);
				}
				$(".pmd-navbar").addClass("minSizeClass");
			} else {
				if ($(e.target).parents("aside").hasClass(ClassName.PMD_SIDEBAR)) {
					return e.target.closable;
				} else {
					if (hassidebar) {
						that.first().stop(true, true).slideUp(300);
					}
					else if (dropdowncenter) {
						if (!$(e.target).parents().hasClass(ClassName.PMD_SIDEBAR)) {
							$(Selector.DROPDOWN_MENU).removeAttr('style');
						}
						that.first().stop(true, true).slideUp(300);
					} else {
						hideDropdown(that);
					}
					$(".pmd-navbar").removeClass("minSizeClass");
				}
			}
    }

    function onClickDropdown(e) {
        var dropdown = $(Selector.PMD_DROPDOWN);
        var hassidebar = $(e.currentTarget).closest(Selector.PMD_SIDEBAR).hasClass(ClassName.PMD_SIDEBAR);
        if (hassidebar && !$(e.currentTarget).hasClass(ClassName.OPEN)) {
            dropdown.removeClass(ClassName.OPEN);
            $(Selector.DROPDOWN_MENU).slideUp(300);
        } else if ($(e.currentTarget).parents("aside").hasClass(ClassName.PMD_SIDEBAR)) {
            $(Selector.DROPDOWN_MENU).slideUp(300);
        }
        e.currentTarget.closable = true;
    }

    function pmdsidebardropdown() {
        var dropdown = $(Selector.PMD_DROPDOWN);
        var w = dropdown.find(Selector.DROPDOWN_MENU).outerWidth();
        var h = dropdown.find(Selector.DROPDOWN_MENU).outerHeight();
        dropdown.find(Selector.RIGHT).css("clip", "rect(0 " + w + "px 0 " + w + "px)");
        dropdown.find(Selector.TOP_LEFT).css("clip", "rect(" + h + "px 0 " + h + "px 0)");
        dropdown.find(Selector.TOP_RIGHT).css("clip", "rect(" + h + "px " + w + "px " + h + "px " + w + "px)");
        dropdown.off(Event.SHOW_BS_DROPDOWN);
        dropdown.on(Event.SHOW_BS_DROPDOWN, showBsDropdownDesktop);
        // Add slideup animation to dropdown
        dropdown.off(Event.HIDE_BS_DROPDOWN);
        dropdown.on(Event.HIDE_BS_DROPDOWN, hideBsDropdownDesktop);
        if ($(window).width() > minimumSize) {
            dropdown.off(Event.CLICK);
            dropdown.on(Event.CLICK, onClickDropdown);
		} else {
			dropdown.find(Selector.DROPDOWN_MENU).removeAttr('style');
		}
        if ($(window).width() < minimumSize) {
            $(".pmd-navbar").addClass("minSizeClass");
        } else {
            $(".pmd-navbar").removeClass("minSizeClass");
        }
    }

	
   /**
	* ------------------------------------------------------------------------
	* Initialization
	* ------------------------------------------------------------------------
	*/
	
    var pmdDropdown = function () {
        _inherits(pmdDropdown, commons);
        function pmdDropdown(options) {
			var pmddropdowntest  = pmdDropdown.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.PMD_DROPDOWN);
			var finalSelector = $(pmddropdowntest).find(Selector.DROPDOWN_MENU + ":not(." + ClassName.PM_INI + ")");
            $(finalSelector).wrap(Template.CONTAINER);
            $(finalSelector).before(Template.BG);
            $(finalSelector).addClass(ClassName.PM_INI);
			var dataTrigger = $(finalSelector).prev("button").attr("data-trigger");
            if (dataTrigger !== undefined && dataTrigger.toLowerCase() === "hover") {
                $(finalSelector).prev("button").addClass("pmd-dropdown-hover");
            }
			//Hover event fot mouse over
            var mainTimeout;
            $(Selector.PMD_DROPDOWN_HOVER).hover(function (event) {
				if('ontouchstart' in document) return $this;
                window.clearTimeout(mainTimeout);
                var parent = $(event.target).parent();
                var $this = $(this);
                if (parent.hasClass('open') && parent.is(event.target)) {
                    // stop this event, stop executing any code
                    // in this callback but continue to propagate
                    return true;
                }
                $this.attr('aria-expanded', 'true');
					parent.addClass('open');
					$this.parent().trigger(Event.SHOW_BS_DROPDOWN);
				}, function (event) {
                var $this = $(this);
                mainTimeout = window.setTimeout(function () {
                    var parent = $(event.target).parent();
                    if (parent.attr("class").split(" ").indexOf("isOpenReq") > -1) {
                        return true;
                    }
                    $this.attr('aria-expanded', 'false');
                    parent.removeClass('open');
                    $this.parent().trigger(Event.HIDE_BS_DROPDOWN);
                }, 10);
            });
            $(Selector.PMD_DROPDOWN_HOVER).parent().find('.dropdown-menu').each(function () {
			    var $this = $(this);
                var subTimeout;
                $this.hover(function () {
                    window.clearTimeout(subTimeout);
                    $this.parent().parent().addClass("isOpenReq");
                    $this.show();
                }, function () {
                    var $submenu = $this;
                    subTimeout = window.setTimeout(function () {
                        $this.parent().parent().removeClass('open');
                        $this.parent().parent().removeClass("isOpenReq");
                        $this.parent().parent().trigger(Event.HIDE_BS_DROPDOWN);
                    }, 10);
                });
            });
            if (options !== undefined && options.minimumSize !== null) {
                minimumSize = parseFloat(options.minimumSize);
            }
            pmdsidebardropdown();
        }
        return pmdDropdown;
    } ();

	
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   */
	
    var plugInFunction = function (options) {
        if (this.selector !== "") {
            Selector.PARENT_SELECTOR = this.selector;
        }
        new pmdDropdown(options);
    };
    $(window).resize(pmdsidebardropdown);
    $.fn[NAME] = plugInFunction;
    return pmdDropdown;

} (jQuery)();

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


/*!
 * --------------------------------------------------------------------------
 * Propeller v1.2.0 (http://propeller.in): alert.js
 * Copyright 2016-2018 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 * -------------------------------------------------------------------------- 
 */

var pmdAlert = function ($) {


    /**
     * ------------------------------------------------------------------------
     * Variables
     * ------------------------------------------------------------------------
     */

    var NAME = 'pmdAlert';
    var JQUERY_NO_CONFLICT = $.fn[NAME];
    var positionX = 'left';
    var positionY = 'top';
    var dataEffect = 'fadeInUp';
    var dataMessage = 'Alert Message';
    var dataType = 'information';
    var actionText = 'Ok';
    var action = 'false';
    var duration = 3000;
    var actionCallback = (function () { return; })();

    var ClassName = {
        CONTAINER: 'pmd-alert-container',
        PMD_ALERT: 'pmd-alert',
        CLOSE: 'pmd-alert-close',
        VISIBLE: 'visible'
    };

    var Selector = {
        PARENT_SELECTOR: '',
        TOGGLE: '.pmd-alert-toggle',
        BODY: 'body',
        CONTAINER: '.' + ClassName.CONTAINER,
        PMD_ALERT: '.' + ClassName.PMD_ALERT,
        CENTER: ".center",
        CLOSE: '.' + ClassName.CLOSE
    };

    var Event = {
        CLICK: 'click'
    };


    /**
     * ------------------------------------------------------------------------
     * Functions
     * ------------------------------------------------------------------------
     */

    function getNotificationValue() {
        if (action == "true") {
            if (actionText == null) {
                return "<div class='pmd-alert' data-action='true'>" + dataMessage + "<a href='javascript:void(0)' class='pmd-alert-close' onclick='(" + actionCallback + ")()'>×</a></div>";
            } else {
                return "<div class='pmd-alert' data-action='true'>" + dataMessage + "<a href='javascript:void(0)' class='pmd-alert-close' onclick='(" + actionCallback + ")()'>" + actionText + "</a></div>";
            }
        } else {
            if (actionText == null) {
                return "<div class='pmd-alert' data-action='false'>" + dataMessage + "</div>";
            } else {
                return "<div class='pmd-alert' data-action='true'>" + dataMessage + "<a href='javascript:void(0)' class='pmd-alert-close'>" + actionText + "</a></div>";
            }
        }
    }

    function closeAlertNotification(e) {
        var $this = $(e.target);
        $this.parents(Selector.PMD_ALERT).slideUp(function () { $(this).removeClass(ClassName.VISIBLE).remove(); });
    }

	
	/**
	* ------------------------------------------------------------------------
	* Initialization
	* ------------------------------------------------------------------------
	*/
	
    var pmdAlert = function () {
        _inherits(pmdAlert, commons);
        function pmdAlert(options) {
            $(pmdAlert.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.TOGGLE)).unbind("click");
            $(pmdAlert.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.TOGGLE)).on("click", function () {
				positionX = $(this).attr("data-positionX");
				positionY = $(this).attr("data-positionY");
				dataEffect = $(this).attr("data-effect");
				dataMessage = $(this).attr("data-message");
				dataType = $(this).attr("data-type");
				actionText = $(this).attr("data-action-text");
				action = $(this).attr("data-action");
				actionCallback = (function () { return; })();
				actionCallback = $(this).attr("data-action-event") !== undefined && $(this).attr("data-action-event") !== "" ? $(this).attr("data-action-event") : actionCallback;
				if ($(window).width() < 768) {
					positionX = "center";
				}
				if (!$(Selector.CONTAINER + "." + positionX + "." + positionY).length){
					$('body').append("<div class='" + ClassName.CONTAINER + " " + positionX + " " + positionY + "'></div>");
				}
				var currentPath = $(Selector.CONTAINER + "." + positionX + "." + positionY);
				var notification = getNotificationValue();
				var boxLength = $(Selector.CONTAINER + "." + positionX + "." + positionY + " " + Selector.PMD_ALERT).length;
				if ($(this).attr("data-duration") !== undefined) {
					duration = $(this).attr("data-duration");
				}
				if (options !== undefined && options.dataDuration !== null) {
					duration = parseFloat(options.dataDuration);
				} 
				if (boxLength > 0 && positionY !== 'top') {
					currentPath.prepend(notification);
				} else {
					currentPath.append(notification);
				}
				currentPath.width($(Selector.CONTAINER).outerWidth());
				if (action === "true") {
					currentPath.children("[data-action='true']").addClass(ClassName.VISIBLE + " " + dataEffect);
				} else {
					currentPath.children("[data-action='false']").addClass(ClassName.VISIBLE + " " + dataEffect).delay(duration).slideUp( function () {
						$(this).removeClass(ClassName.VISIBLE + " " + dataEffect).remove();
					});
				}
				currentPath.children(Selector.PMD_ALERT).eq(boxLength).addClass(dataType);
				var middle = $(Selector.CONTAINER).outerWidth() / 2;
				$(Selector.CONTAINER + Selector.CENTER).css("marginLeft", "-" + middle + "px");
				$(document).on(Event.CLICK, Selector.CLOSE, closeAlertNotification);
			});
		}
        return pmdAlert;
    } ();
	
	
	/**
	 * ------------------------------------------------------------------------
	 * jQuery
	 * ------------------------------------------------------------------------
	 */
	
    var plugInFunction = function (options) {
        if (this.selector !== "") {
            Selector.PARENT_SELECTOR = this.selector;
        }
        new pmdAlert(options);
    };
    $.fn[NAME] = plugInFunction;
    return pmdAlert;

} (jQuery)();


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

/**
 * --------------------------------------------------------------------------
 * Propeller v1.2.0 (http://propeller.in): tab-scrollable.js
 * Copyright 2016-2018 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 * --------------------------------------------------------------------------
 */

var pmdTab = function ($) {
	
	
   /**
    * ------------------------------------------------------------------------
    * Variables
    * ------------------------------------------------------------------------
    */

    var NAME = 'pmdTab';
    var JQUERY_NO_CONFLICT = $.fn[NAME];

    var ClassName = {
        PMD_TAB: 'pmd-tabs',
		NAV_JUSTIFIED: 'nav-justified',
		PREV_TAB: 'prev-tab',
        LAST_TAB: 'last-tab',
        PM_INI: "pm-ini",
		SCROLL: "pmd-tabs-scroll",
        SCROLL_CONTAINER: 'pmd-tabs-scroll-container',
        ACTIVE_BAR: 'pmd-tab-active-bar'
    };

    var Selector = {
        PARENT_SELECTOR: '',
		PMD_TAB: '.' + ClassName.PMD_TAB,
        UL_NAV_TABS: 'ul.nav-tabs',
        LI: 'li',
        SCROLL_CONTAINER: '.' + ClassName.SCROLL_CONTAINER,
        NAV_TAB: '.nav-tabs',
        SCROLL_RIGHT: '.pmd-tabs-scroll-right',
        SCROLL_LEFT: '.pmd-tabs-scroll-left',
        UL_LI_ACTIVE: 'ul li.active',
        ACTIVE_BAR: '.' + ClassName.ACTIVE_BAR,
        NAV: '.nav',
        UL_LI: 'ul li',
        NAV_TABS_LI: '.nav-tabs li',
        LAST_TAB: '.' + ClassName.LAST_TAB,
        PREV_TAB: '.' + ClassName.PREV_TAB,
        PM_INI: '.' + ClassName.PM_INI
    };

    var Template = {
        ACTIVE_BAR_DIV: "<div class='pmd-tab-active-bar'></div>",
        SCROLL_LEFT: "<div class='pmd-tabs-scroll-left'><i class='material-icons pmd-sm'>chevron_left</i></div>",
        SCROLL_RIGHT: "<div class='pmd-tabs-scroll-right'><i class='material-icons pmd-sm'>chevron_right</i></div>",
        SCROLL_CONTAINER: "<div class='pmd-tabs-scroll-container'></div>"
    };

	
   /**
	* ------------------------------------------------------------------------
	* Functions
	* ------------------------------------------------------------------------
	*/

    function widthOfList($this) {
        var itemsWidth = 0;
        $this.find(Selector.LI).each(function () {
            var itemWidth = $(this)[0].getBoundingClientRect().width;
            itemsWidth += itemWidth;
        });
        return itemsWidth;
    }

    function appendulwidth($this) {
        if ($this.find(Selector.UL_NAV_TABS).hasClass(ClassName.NAV_JUSTIFIED)) {
            $this.find(Selector.UL_NAV_TABS).width("100%");
        } else {
            $this.find(Selector.UL_NAV_TABS).width(widthOfList($this));
        }
    }

    function getLeftPosi($this) {
        return $this.find(Selector.UL_NAV_TABS).position().left;
    }

    function reAdjust($this) {
        if (($this.outerWidth()) < widthOfList($this)) {
            var navScrolledRight = $this.find(Selector.SCROLL_CONTAINER).scrollLeft(),
                navWrapWidth = $this.width(),
                navWidth = $this.find(Selector.NAV_TAB).width(),
                ammountRight = navWidth - navScrolledRight - navWrapWidth;
            if (ammountRight > 0) {
                $this.find(Selector.SCROLL_RIGHT).show();
            }
        }
        else {
            $this.find(Selector.SCROLL_RIGHT).hide();
        }
        if (getLeftPosi($this) < 0) {
            var navScrolledLeft = $this.find(Selector.SCROLL_CONTAINER).scrollLeft(),
                ammountLeft = navScrolledLeft;
            if (ammountLeft > 0) {
                $this.find(Selector.SCROLL_LEFT).show();
            }
        }
        else {
            $this.find(Selector.SCROLL_LEFT).hide();
        }
    }

    function activeTabCenter($this) {
        var $tabWidth = $this.outerWidth(),
            $middlePosition = $tabWidth / 2,
            $tabWrapperLeft = $this.offset().left,
            $sliderActive = $this.find(Selector.UL_LI_ACTIVE),
            $activeWidth = $sliderActive.outerWidth(),
            $tabHalfWidth = $activeWidth / 2,
            $tableftScroll = $this.find(Selector.SCROLL_CONTAINER).scrollLeft(),
            $tableftPosi = $this.find(Selector.UL_LI_ACTIVE).offset().left,
            $tabCenterPosi = $tableftPosi - $middlePosition - $tabWrapperLeft + $tableftScroll + $tabHalfWidth;
        	$this.find(Selector.SCROLL_CONTAINER).animate({ scrollLeft: $tabCenterPosi }, 1);
    }

    function sliderLoad($this) {
        var $slider = $this.find(Selector.ACTIVE_BAR),
            $sliderActive = $this.find(Selector.UL_LI_ACTIVE),
            $isX = $sliderActive.offset().left,
            $navX = $this.find(Selector.NAV).offset().left,
            $wrapperLeft = $this.offset().left,
            $sliderLeft = $isX - $wrapperLeft,
            $finalPossion = $wrapperLeft - $navX + $isX - $wrapperLeft;

        if ($navX < $wrapperLeft) {
            $slider.width($sliderActive.width() + "px").css("left", $finalPossion + "px");
        } else {
            $slider.width($sliderActive.width() + "px").css("left", $sliderLeft + "px");
        }
        $this.find(Selector.UL_LI).click(function () {
            var $thisWidth = $(this).width() + "px",
                $newLeft = $(this).offset().left - $wrapperLeft,
                $navX = $(this).closest(Selector.NAV).offset().left;
            $finalPossion = $wrapperLeft - $navX + $newLeft;

            $slider.width($thisWidth).css("left", $finalPossion + "px");
        });
    }

    function onResizeWindow(event) {
        var $this = event.data.param1;
        setTimeout(function () {
            appendulwidth($this);
            reAdjust($this);
            activeTabCenter($this);
        }, 150);
        sliderLoad($this);
    }

    function onPmdTabScrollRightClick(event) {
        var $this = event.data.param1;
        var $tabSet = '',
            $wrapper = $(event.currentTarget).prev(Selector.SCROLL_CONTAINER),
            $tab = $wrapper.find(Selector.NAV_TABS_LI),
            $thisWidht = $(event.currentTarget).outerWidth(),
            $navCotainer = $this.outerWidth(),
            $wrapperRight = $this.offset().left + $navCotainer;

        $tab.each(function () {
            var SuspectTabLeft = $(this).offset().left;
            var SuspectTabRight = $(this).offset().left + $(this).outerWidth();
            $(this).removeClass(ClassName.PREV_TAB);
            if (SuspectTabLeft < $wrapperRight && SuspectTabRight > $wrapperRight) {
                $tabSet = SuspectTabRight - $wrapperRight + $thisWidht;
                $(this).addClass(ClassName.LAST_TAB);
                $(this).prev().removeClass(ClassName.LAST_TAB);
            }
        });
        var finalTab = $wrapper.find(Selector.LAST_TAB).next().length;
        if (finalTab === 0) {
            var lastTabRight = $wrapper.find(Selector.LAST_TAB).offset().left + $wrapper.find(Selector.LAST_TAB).outerWidth();
            var NewScrollAmount = lastTabRight - $wrapperRight;
            $wrapper.animate({ scrollLeft: '+=' + NewScrollAmount });
            $(event.currentTarget).fadeOut('slow');
        }
        else {
            $wrapper.animate({ scrollLeft: '+=' + $tabSet });
        }
        $(event.currentTarget).parents(Selector.PMD_TAB).find(Selector.SCROLL_LEFT).fadeIn('slow');
    }

    function onPmdTabScrollLeftClick(event) {
        var $this = event.data.param1;
        var $wrapper = $(event.currentTarget).next(Selector.SCROLL_CONTAINER),
            $tab = $wrapper.find(Selector.NAV_TABS_LI),
            $thisWidht = $(event.currentTarget).outerWidth(),
            $wrapperLeft = $this.offset().left,
            $tabSetLeft = '';

        $tab.each(function () {
            var SuspectTabLeft = $(this).offset().left;
            var SuspectTabRight = $(this).offset().left + $(this).outerWidth();
            $(this).removeClass(ClassName.LAST_TAB);
            if (SuspectTabLeft < $wrapperLeft && SuspectTabRight > $wrapperLeft) {
                $tabSetLeft = $wrapperLeft - SuspectTabLeft + $thisWidht;
                $(this).addClass(ClassName.PREV_TAB);
                $(this).next().removeClass(ClassName.PREV_TAB);
            }
        });
        var finalTab = $wrapper.find(Selector.PREV_TAB).prev().length;

        if (finalTab === 0) {
            var lastTableft = $wrapper.find(Selector.PREV_TAB).offset().left;
            var NewScrollAmount = $wrapperLeft - lastTableft;
            $wrapper.animate({ scrollLeft: '-=' + NewScrollAmount });
            $(event.currentTarget).fadeOut('slow');
        }
        else {
            $wrapper.animate({ scrollLeft: '-=' + $tabSetLeft });
        }
        $(event.currentTarget).parents(Selector.PMD_TAB).find(Selector.SCROLL_RIGHT).fadeIn('slow');
    }

    function onUlLiClick(event) {
        var $this = event.data.param1;
        var $wrapper = $(event.target).closest(Selector.SCROLL_CONTAINER);
        var activeLeft = $(event.target).offset().left;
        var activeRight = $(event.target).offset().left + $(event.target).outerWidth();
        var $navCotainer = $this.outerWidth();
        var $wrapperRight = $this.offset().left + $navCotainer;
        var $buttonWidth = $(Selector.SCROLL_RIGHT).outerWidth();
        var $wrapperLeft = $this.offset().left;
        var cuttRight = $wrapperRight - $buttonWidth;
        var cuttleft = $wrapperLeft + $buttonWidth;
        if (activeLeft < cuttleft && activeRight > cuttleft) {

            var setLeft = $wrapperLeft - activeLeft + $buttonWidth;
            $wrapper.animate({ scrollLeft: '-=' + setLeft });
            $(event.target).parents(Selector.PMD_TAB).find(Selector.SCROLL_RIGHT).fadeIn('slow');
        }
        if (activeLeft < cuttRight && activeRight > cuttRight) {
            var setRight = activeRight - $wrapperRight + $buttonWidth;
            $wrapper.animate({ scrollLeft: '+=' + setRight });
            $(event.target).parents(Selector.PMD_TAB).find(Selector.SCROLL_LEFT).fadeIn('slow');
        }
    }


   /**
	* ------------------------------------------------------------------------
	* Initialization
	* ------------------------------------------------------------------------
	*/

    var pmdTab = function () {
        _inherits(pmdTab, commons);
        function pmdTab(options) {
            $(window).unbind("resize");
			$(pmdTab.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.PMD_TAB)).each(function () {
                var $this = $(this);
                if (options !== undefined && options.scroll !== null && (options.scroll === true || options.scroll === "true")) {
                    $this.addClass(ClassName.SCROLL);
                } else {
                    $this.removeClass(ClassName.SCROLL);
                    if (options !== undefined && $this.attr("scroll") !== undefined && $this.attr("scroll").toLowerCase() === "true") {
                        $this.attr("scroll", "false");
                    }
                    if ($this.find(".nav.nav-tabs").parent().attr("class").split(" ").indexOf(ClassName.SCROLL_CONTAINER) > -1) {
                        $this.find(".nav.nav-tabs").unwrap();
                        $this.find(Selector.ACTIVE_BAR).remove();
                        $this.find(Selector.SCROLL_LEFT).remove();
                        $this.find(Selector.SCROLL_RIGHT).remove();
                    }
                }
                if ($this.attr("scroll") !== undefined && $this.attr("scroll").toLowerCase() === "true") {
                    $this.addClass(ClassName.SCROLL);
                }
                if ($this.attr("class").split(" ").indexOf(ClassName.SCROLL) > -1) {
                    if ($this.find(".nav.nav-tabs").parent().attr("class").split(" ").indexOf(ClassName.SCROLL_CONTAINER) < 0) {
                        $this.find(".nav.nav-tabs").wrap(Template.SCROLL_CONTAINER);
                        $this.find(Selector.SCROLL_CONTAINER).append(Template.ACTIVE_BAR_DIV);
                        $this.find(Selector.SCROLL_CONTAINER).before(Template.SCROLL_LEFT);
                        $this.append(Template.SCROLL_RIGHT);
                    }
                } else {
                    if ($this.find(Selector.ACTIVE_BAR).length === 0) {
                        $this.find(".nav.nav-tabs").before(Template.ACTIVE_BAR_DIV);
                    }
                }
                appendulwidth($this);
                reAdjust($this);
                activeTabCenter($this);
                sliderLoad($this);
                $this.find(Selector.SCROLL_RIGHT).off("click");
                $this.find(Selector.SCROLL_LEFT).off("click");
				$this.find(Selector.SCROLL_RIGHT).click({ param1: $this }, onPmdTabScrollRightClick);
                $this.find(Selector.SCROLL_LEFT).click({ param1: $this }, onPmdTabScrollLeftClick);
                $this.find(Selector.UL_LI).click({ param1: $this }, onUlLiClick);
                $(window).resize({ param1: $this }, onResizeWindow);
            });
        }
        return pmdTab;
    } ();


   /**
	* ------------------------------------------------------------------------
	* jQuery
	* ------------------------------------------------------------------------
	*/

    var plugInFunction = function (options) {
        if (this.selector !== "") {
            Selector.PARENT_SELECTOR = this.selector;
        }
        new pmdTab(options);
    };
	$.fn[NAME] = plugInFunction;
    return pmdTab;
	
} (jQuery)();


/**
 * --------------------------------------------------------------------------
 * Propeller v1.2.0 (http://propeller.in): sidebar.js
 * Copyright 2016-2018 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 * --------------------------------------------------------------------------
 */

var pmdSidebar = function ($) {
	
	
   /**
	* ------------------------------------------------------------------------
	* Variables
	* ------------------------------------------------------------------------
	*/
	
    var NAME = 'pmdSidebar';
    var JQUERY_NO_CONFLICT = $.fn[NAME];
    var isOpenWidth = 1200;

    var ClassName = {
        OPEN: 'pmd-sidebar-open',
        SLIDE_PUSH: 'pmd-sidebar-slide-push',
        RIGHT_FIXED: 'pmd-sidebar-right-fixed',
        LEFT_FIXED: 'pmd-sidebar-left-fixed',
        OVERLAY_ACTIVE: 'pmd-sidebar-overlay-active',
        BODY_OPEN: 'pmd-body-open',
        RIGHT: 'pmd-sidebar-right',
        NAVBAR_SIDEBAR: 'pmd-navbar-sidebar',
        LEFT: 'pmd-sidebar-left',
        PM_INI: ".pm-ini",
		IS_SLIDEPUSH: "is-slidepush"
    };

    var Selector = {
        BODY:'body',
        PARENT_SELECTOR: '',
        OVERLAY:'.pmd-sidebar-overlay',
        SIDEBAR:'.pmd-sidebar',
        LEFT:'.' + ClassName.LEFT,
        RIGHT_FIXED: '.' + ClassName.RIGHT_FIXED,
        NAVBAR_SIDEBAR: '.' + ClassName.NAVBAR_SIDEBAR,
        SIDEBAR_HEADER: '#sidebar .sidebar-header',
        TOGGLE:'.pmd-sidebar-toggle',
        TOPBAR_FIXED: '.topbar-fixed',
        SIDEBAR_DROPDOWN: '.pmd-sidebar-nav .dropdown-menu',
		TOGGLE_RIGHT: '.pmd-sidebar-toggle-right',
        TOPBAR_TOGGLE: '.pmd-topbar-toggle',
        TOPBAR_CLOSE: '.topbar-close',
        NAVBAR_TOGGLE: '.pmd-navbar-toggle',
        PM_INI: ".pm-ini",
		IS_SLIDEPUSH: '.' + ClassName.IS_SLIDEPUSH
    };

    var Event = {
        CLICK: 'click'
    };
	
	
   /**
	* ------------------------------------------------------------------------
	* Functions
	* ------------------------------------------------------------------------
	*/
	
    // Left sidebar toggle
    function onSidebarToggle(e) {
		var dataTarget = "#" + $(e.currentTarget).attr("data-target");
		$(dataTarget).toggleClass(ClassName.OPEN);
        if (($(dataTarget).hasClass(ClassName.LEFT_FIXED) || $(dataTarget).hasClass(ClassName.RIGHT_FIXED)) && $(dataTarget).hasClass(ClassName.OPEN)) {
			$(Selector.OVERLAY).addClass(ClassName.OVERLAY_ACTIVE);
			$(Selector.BODY).addClass(ClassName.BODY_OPEN);
        } else {
			$(Selector.OVERLAY).removeClass(ClassName.OVERLAY_ACTIVE);
			$(Selector.BODY).removeClass(ClassName.BODY_OPEN);
        }
    }

	// Nave bar in Sidebar
    function onNavBarToggle() {
        $(Selector.NAVBAR_SIDEBAR).toggleClass(ClassName.OPEN);
        if (($(Selector.NAVBAR_SIDEBAR).hasClass(ClassName.NAVBAR_SIDEBAR)) && $(Selector.NAVBAR_SIDEBAR).hasClass(ClassName.OPEN)) {
            $(Selector.OVERLAY).addClass(ClassName.OVERLAY_ACTIVE);
            $(Selector.BODY).addClass(ClassName.BODY_OPEN);
        } else {
            $(Selector.OVERLAY).removeClass(ClassName.OVERLAY_ACTIVE);
            $(Selector.BODY).addClass(ClassName.BODY_OPEN);
        }
    }
	
	// Overlay
    function onOverlayClick(event) {
        var $this = $(event.currentTarget);
        $this.removeClass(ClassName.OVERLAY_ACTIVE);
        $(Selector.SIDEBAR).removeClass(ClassName.OPEN);
        $(Selector.NAVBAR_SIDEBAR).removeClass(ClassName.OPEN);
        $(Selector.BODY).removeClass(ClassName.BODY_OPEN);
        event.stopPropagation();
    }

	// On Window Resize
    function onResizeWindow(e) {
		var options = e.data.param1;
		var sideBarSelector=Selector.SIDEBAR;
		$(sideBarSelector).each(function () {
			var $this = $(this);
			var sideBarId = $this.attr("id");
			var isOpenWidth=$("a[data-target="+sideBarId+"]").attr("is-open-width");
			if($(window).width()<isOpenWidth) {
				if ($("#"+sideBarId).hasClass(ClassName.LEFT && ClassName.SLIDE_PUSH)) {
					$("#"+sideBarId).removeClass(ClassName.OPEN + ' ' + ClassName.SLIDE_PUSH);
					$("#"+sideBarId).addClass(ClassName.LEFT_FIXED + ' ' + ClassName.IS_SLIDEPUSH);
				} else {
					$("#"+sideBarId).removeClass(ClassName.OPEN);
				}
			}else{
				if ($("#"+sideBarId).hasClass(ClassName.IS_SLIDEPUSH)) {
					$("#"+sideBarId).addClass(ClassName.OPEN + ' ' + ClassName.SLIDE_PUSH);
					$("#"+sideBarId).removeClass(ClassName.LEFT_FIXED);	
				} else {
					$("#"+sideBarId).addClass(ClassName.OPEN);
				}
			}
		});
		$(pmdSidebar.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.OVERLAY)).removeClass(ClassName.OVERLAY_ACTIVE);
		$(Selector.BODY).removeClass(ClassName.BODY_OPEN);
    }

	
   /**
	* ------------------------------------------------------------------------
	* Initialization
	* ------------------------------------------------------------------------
	*/

	var pmdSidebar = function () {
        _inherits(pmdSidebar, commons);
        function pmdSidebar(options) {
            var sideBarSelector=Selector.TOGGLE;
            if(Selector.PARENT_SELECTOR!=="" && Selector.PARENT_SELECTOR !==undefined){
				sideBarSelector= Selector.TOGGLE + "[data-target="+Selector.PARENT_SELECTOR.substr(1,Selector.PARENT_SELECTOR.length)+"]";
            }
            $(sideBarSelector).each(function () {
                var $this = $(this);
                var dataTarget = "#" + $this.attr("data-target");
				var dataPlacement = $this.attr("data-placement");
                var dataPosition = $this.attr("data-position");
				var isopen = $this.attr("is-open");
				var minsize = $this.attr("minsize");
				dataPlacement=dataPlacement || "";
				dataPosition=dataPosition || "";
				if( $(sideBarSelector).attr("data-target") === undefined){
					console.warn("You need to define 'data-target' attribute in the action button.");
				}
				if ($(Selector.SIDEBAR).attr("id") === undefined){
					console.warn("You need to add id='"+$this.attr("data-target")+"'in the sidebar container div like <aside id='" + $this.attr("data-target") + "'class='pmd-sidebar'>");
				}
				if (dataPlacement.toLowerCase() === "left") {
					$(dataTarget).addClass(ClassName.LEFT);
				} else if (dataPlacement.toLowerCase() === "right") {
					$(dataTarget).addClass(ClassName.RIGHT_FIXED);
				} else {
					$(dataTarget).addClass(ClassName.LEFT);
				}
				if (dataPlacement.toLowerCase() === "left" && dataPosition.toLowerCase() === "slidepush") {
					$(dataTarget).addClass(ClassName.SLIDE_PUSH);
				} else if (dataPlacement.toLowerCase() === "left" && dataPosition.toLowerCase() === "fixed") {
					$(dataTarget).addClass(ClassName.LEFT_FIXED);
				} else if (dataPlacement.toLowerCase() === "right" && dataPosition.toLowerCase() === "slidepush") {
					
				} else if (dataPlacement.toLowerCase() === "right" && dataPosition.toLowerCase() === "fixed") {
					$(dataTarget).addClass(ClassName.RIGHT_FIXED);
				} else {
					$(dataTarget).addClass(ClassName.LEFT_FIXED);
				}
				if (isopen !== undefined && isopen !== null && (isopen === true || isopen === "true")){
                    $(dataTarget).addClass(ClassName.OPEN);
                } else {
                    $(dataTarget).removeClass(ClassName.OPEN);
                }
                $(dataTarget + ' ' + Selector.SIDEBAR_DROPDOWN).off();
                $(dataTarget + ' ' + Selector.SIDEBAR_DROPDOWN).on(Event.CLICK, function (event) {
					event.stopPropagation(); 
				});
                $(pmdSidebar.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.TOPBAR_TOGGLE)).off(Event.CLICK);
                $(pmdSidebar.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.TOPBAR_TOGGLE)).on(Event.CLICK, function (e) { $(Selector.TOPBAR_FIXED).toggleClass(ClassName.OPEN); });
                $(pmdSidebar.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.TOPBAR_CLOSE)).off(Event.CLICK);
                $(pmdSidebar.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.TOPBAR_CLOSE)).on(Event.CLICK, function () { $(Selector.TOPBAR_FIXED).removeClass(ClassName.OPEN); });
                $this.off(Event.CLICK);
                $this.on(Event.CLICK, onSidebarToggle);
                var isOpenWidth = $this.attr("is-open-width");
				if($(window).width()<isOpenWidth) {
					if ($(dataTarget).hasClass(ClassName.LEFT && ClassName.SLIDE_PUSH)) {
						$(dataTarget).removeClass(ClassName.OPEN + ' ' + ClassName.SLIDE_PUSH);
						$(dataTarget).addClass(ClassName.LEFT_FIXED + ' ' + ClassName.IS_SLIDEPUSH);
					} else {
						$(dataTarget).removeClass(ClassName.OPEN);
					}
				} else{
					if ($(dataTarget).hasClass(ClassName.IS_SLIDEPUSH)) {
						$(dataTarget).addClass(ClassName.OPEN + ' ' + ClassName.SLIDE_PUSH);
						$(dataTarget).removeClass(ClassName.LEFT_FIXED);	
					} else {
			//			$(dataTarget).addClass(ClassName.OPEN);
					}
				}
				
            });
			
			$(pmdSidebar.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.NAVBAR_TOGGLE)).off(Event.CLICK);
			$(pmdSidebar.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.NAVBAR_TOGGLE)).on(Event.CLICK, onNavBarToggle);
            $(pmdSidebar.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.OVERLAY)).off(Event.CLICK);
            $(pmdSidebar.prototype.attachParentSelector(Selector.PARENT_SELECTOR, Selector.OVERLAY)).on(Event.CLICK, onOverlayClick);
			
		//	$(window).unbind("resize");
            $(window).resize({ param1: options }, onResizeWindow);
            (function (removeClass) {
                jQuery.fn.removeClass = function (value) {
                    if (value && typeof value.test === "function") {
                        for (var i = 0, l = this.length; i < l; i++) {
                            var elem = this[i];
                            if (elem.nodeType === 1 && elem.className) {
                                var classNames = elem.className.split(/\s+/);

                                for (var n = classNames.length; n--;) {
                                    if (value.test(classNames[n])) {
                                        classNames.splice(n, 1);
                                    }
                                }
                                elem.className = jQuery.trim(classNames.join(" "));
                            }
                        }
                    } else {
                        removeClass.call(this, value);
                    }
                    return this;
                };
            })(jQuery.fn.removeClass);
        }
        return pmdSidebar;
    } ();

	
   /**
	* ------------------------------------------------------------------------
	* jQuery
	* ------------------------------------------------------------------------
	*/
	
	var plugInFunction = function (arg) {
		if (this.selector !== "") {
			Selector.PARENT_SELECTOR = this.selector;
		}
		new pmdSidebar(arg);
	};
	$.fn[NAME] = plugInFunction;
	return pmdSidebar;

} (jQuery)();

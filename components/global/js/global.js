
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

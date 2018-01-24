
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

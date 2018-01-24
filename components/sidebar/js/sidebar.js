
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

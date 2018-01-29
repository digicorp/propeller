
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
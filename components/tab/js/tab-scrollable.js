
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

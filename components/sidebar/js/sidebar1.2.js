// ------- Propeller Checkbox component js function ------- //
var pmdSidebar = function ($) {
  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */
  var NAME = 'pmdSidebar';
  var VERSION = '1.0.0';
  var JQUERY_NO_CONFLICT = $.fn[NAME];

  var ClassName = {
    PMD_SIDEBAR_OPEN: 'pmd-sidebar-open',
    PMD_SIDEBAR_SLIDE_PUSH: 'pmd-sidebar-slide-push',
    PMD_SIDEBAR_RIGHT_FIXED: 'pmd-sidebar-right-fixed',
    PMD_SIDEBAR_LEFT_FIXED: 'pmd-sidebar-left-fixed',
    PMD_SIDEBAR_OVERLAY_ACTIVE: 'pmd-sidebar-overlay-active',
    PMD_BODY_OPEN: 'pmd-body-open',
    PMD_SIDEBAR_RIGHT: 'pmd-sidebar-right',
    PMD_NAVBAR_SIDEBAR: 'pmd-navbar-sidebar'
  }

  var Selector = {
    BODY: 'body',
    PARENT_SELECTOR: '',
    PMD_SIDEBAR_OVERLAY: '.pmd-sidebar-overlay',
    PMD_SIDEBAR: '.pmd-sidebar',
    PMD_SIDEBAR_LEFT: '.pmd-sidebar-left',
    PMD_SIDEBAR_RIGHT_FIXED: '.pmd-sidebar-right-fixed',
    PMD_NAVBAR_SIDEBAR: '.pmd-navbar-sidebar',
    SIDEBAR_HEADER: '#sidebar .sidebar-header',
    PMD_SIDEBAR_TOGGLE: '.pmd-sidebar-toggle',
    TOPBAR_FIXED: '.topbar-fixed',
    SIDEBAR_DROPDOWN: '.pmd-sidebar .dropdown-menu, .pmd-navbar-sidebar .dropdown-menu',
    PMD_SIDEBAR_TOGGLE_RIGHT: '.pmd-sidebar-toggle-right',
    PMD_TOPBAR_TOGGLE: '.pmd-topbar-toggle',
    TOPBAR_CLOSE: '.topbar-close',
    PMD_NAVBAR_TOGGLE: '.pmd-navbar-toggle'
  };

  var Template = {}

  var Event = {
    CLICK: 'click'
  }

  //Left sidebar toggle
  function onSidebarToggleLeft(e) {
    $(Selector.PMD_SIDEBAR_LEFT).toggleClass(ClassName.PMD_SIDEBAR_OPEN);
    if (($(Selector.PMD_SIDEBAR_LEFT).hasClass(ClassName.PMD_SIDEBAR_LEFT_FIXED) || $(Selector.PMD_SIDEBAR_LEFT).hasClass(ClassName.PMD_SIDEBAR_RIGHT_FIXED)) && $(Selector.PMD_SIDEBAR_LEFT).hasClass(ClassName.PMD_SIDEBAR_OPEN)) {
      $(Selector.PMD_SIDEBAR_OVERLAY).addClass(ClassName.PMD_SIDEBAR_OVERLAY_ACTIVE);
      $(Selector.BODY).addClass(ClassName.PMD_BODY_OPEN)
    } else {
      $(Selector.PMD_SIDEBAR_OVERLAY).removeClass(ClassName.PMD_SIDEBAR_OVERLAY_ACTIVE);
      $(Selector.BODY).removeClass(ClassName.PMD_BODY_OPEN)
    }
  }

  //right sidebar toggle
  function onSidebarToggleRight(e) {
    $(Selector.PMD_SIDEBAR_RIGHT_FIXED).toggleClass(ClassName.PMD_SIDEBAR_OPEN);
    if (($(Selector.PMD_SIDEBAR_RIGHT_FIXED).hasClass(ClassName.PMD_SIDEBAR_RIGHT)) && $(Selector.PMD_SIDEBAR_RIGHT_FIXED).hasClass(ClassName.PMD_SIDEBAR_OPEN)) {
      $(Selector.PMD_SIDEBAR_OVERLAY).addClass(ClassName.PMD_SIDEBAR_OVERLAY_ACTIVE);
      $(Selector.BODY).addClass(ClassName.PMD_BODY_OPEN)
    } else {
      $(Selector.PMD_SIDEBAR_OVERLAY).removeClass(ClassName.PMD_SIDEBAR_OVERLAY_ACTIVE);
      $(Selector.BODY).removeClass(ClassName.PMD_BODY_OPEN)
    }
  }

  // Nave bar in Sidebar
  function onNavBarToggle(e) {
    $(Selector.PMD_NAVBAR_SIDEBAR).toggleClass(ClassName.PMD_SIDEBAR_OPEN);
    if (($(Selector.PMD_NAVBAR_SIDEBAR).hasClass(ClassName.PMD_NAVBAR_SIDEBAR)) && $(Selector.PMD_NAVBAR_SIDEBAR).hasClass(ClassName.PMD_SIDEBAR_OPEN)) {
      $(Selector.PMD_SIDEBAR_OVERLAY).addClass(ClassName.PMD_SIDEBAR_OVERLAY_ACTIVE);
      $(Selector.BODY).addClass(ClassName.PMD_BODY_OPEN)
    } else {
      $(Selector.PMD_SIDEBAR_OVERLAY).removeClass(ClassName.PMD_SIDEBAR_OVERLAY_ACTIVE);
      $(Selector.BODY).addClass(ClassName.PMD_BODY_OPEN)
    }
  }

  function onOverlayClick(event) {
    var $this = $(event.currentTarget);
    $this.removeClass(ClassName.PMD_SIDEBAR_OVERLAY_ACTIVE);
    $(Selector.PMD_SIDEBAR).removeClass(ClassName.PMD_SIDEBAR_OPEN);
    $(Selector.PMD_NAVBAR_SIDEBAR).removeClass(ClassName.PMD_SIDEBAR_OPEN);
    $(Selector.BODY).removeClass(ClassName.PMD_BODY_OPEN)
    event.stopPropagation();
  }

  function onResizeWindow() {
    if ($(window).width() < 1200) {
      $(Selector.PMD_SIDEBAR).removeClass(ClassName.PMD_SIDEBAR_OPEN + ' ' + ClassName.PMD_SIDEBAR_SLIDE_PUSH);
      $(Selector.PMD_SIDEBAR_LEFT).addClass(ClassName.PMD_SIDEBAR_LEFT_FIXED);
      $(Selector.PMD_SIDEBAR_RIGHT_FIXED).addClass(ClassName.PMD_SIDEBAR_RIGHT);
      $(Selector.PMD_SIDEBAR_TOGGLE).css('display', 'inherit');
    } else {
      $(Selector.PMD_SIDEBAR_LEFT).removeClass(ClassName.PMD_SIDEBAR_LEFT_FIXED).addClass(ClassName.PMD_SIDEBAR_OPEN + ' ' + ClassName.PMD_SIDEBAR_SLIDE_PUSH);
      $(Selector.PMD_SIDEBAR_RIGHT_FIXED).removeClass(ClassName.PMD_SIDEBAR_RIGHT);
    }
    $(Selector.PMD_SIDEBAR_OVERLAY).removeClass(ClassName.PMD_SIDEBAR_OVERLAY_ACTIVE);
    $(Selector.BODY).removeClass(ClassName.PMD_BODY_OPEN);
  }

  var pmdSidebar = function () {
    function pmdSidebar() {
      if ($(window).width() < 1200) {
        $(Selector.PMD_SIDEBAR).removeClass(ClassName.PMD_SIDEBAR_OPEN + ' ' + ClassName.PMD_SIDEBAR_SLIDE_PUSH);
        $(Selector.PMD_SIDEBAR_LEFT).addClass(ClassName.PMD_SIDEBAR_LEFT_FIXED);
        $(Selector.PMD_SIDEBAR_RIGHT_FIXED).addClass(ClassName.PMD_SIDEBAR_RIGHT);
        $(Selector.PMD_SIDEBAR_TOGGLE).css('display', 'inherit');
        $(Selector.BODY).removeClass(ClassName.PMD_BODY_OPEN);
      }
    }
    return pmdSidebar;
  } ()

  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   */
  var plugInFunction = function () {
    if (this.selector !== "") {
      Selector.PARENT_SELECTOR = this.selector;
    }
    new pmdSidebar();
  }

  $(document).on(Event.CLICK, Selector.SIDEBAR_DROPDOWN, function (event) { event.stopPropagation(); });
  $(document).on(Event.CLICK, Selector.PMD_TOPBAR_TOGGLE, function (e) { $(Selector.TOPBAR_FIXED).toggleClass(ClassName.PMD_SIDEBAR_OPEN); });
  $(document).on(Event.CLICK, Selector.TOPBAR_CLOSE, function () { $(Selector.TOPBAR_FIXED).removeClass(ClassName.PMD_SIDEBAR_OPEN); });
  $(document).on(Event.CLICK, Selector.PMD_SIDEBAR_TOGGLE, onSidebarToggleLeft);
  $(document).on(Event.CLICK, Selector.PMD_SIDEBAR_TOGGLE_RIGHT, onSidebarToggleRight);
  $(document).on(Event.CLICK, Selector.PMD_NAVBAR_TOGGLE, onNavBarToggle);
  $(document).on(Event.CLICK, Selector.PMD_SIDEBAR_OVERLAY, onOverlayClick);
  $(window).resize(onResizeWindow);
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
    }
  })(jQuery.fn.removeClass);


  $.fn[NAME] = plugInFunction;

  return pmdSidebar;

} (jQuery)()

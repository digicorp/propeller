var overlay = $('.pmd-sidebar-overlay');
var sidebar = $('.pmd-sidebar');
var lsidebar = $('.pmd-sidebar-left');
var rsidebar = $('.pmd-sidebar-right-fixed');
var pmdnavbarsidebar = $('.pmd-navbar-sidebar');
var sidebar = $('.pmd-sidebar');
var sidebarHeader = $('#sidebar .sidebar-header');
var sidebarImg = sidebarHeader.css('background-image');
var toggleButtons = $('.pmd-sidebar-toggle');
var pmdtopbartoggle = $('.topbar-fixed');

$(document).ready(function() {

	// toggleButtons.css('display', 'none');

	// Left Sidebar
	$('.pmd-sidebar-toggle').on( 'click', function(e) {
		lsidebar.toggleClass('pmd-sidebar-open');
			if ((lsidebar.hasClass('pmd-sidebar-left-fixed') || lsidebar.hasClass('pmd-sidebar-right-fixed')) && lsidebar.hasClass('pmd-sidebar-open')) {
		overlay.addClass('pmd-sidebar-overlay-active');
			$('body').addClass("pmd-body-open")
		} else {
			overlay.removeClass('pmd-sidebar-overlay-active');
			$('body').removeClass("pmd-body-open")
		}
	});

	$( ".pmd-sidebar .dropdown-menu, .pmd-navbar-sidebar .dropdown-menu" ).click(function(event) {
        event.stopPropagation();
    });

	// Right Sidebar
	$('.pmd-sidebar-toggle-right').on( 'click', function(e) {
		rsidebar.toggleClass('pmd-sidebar-open');
        if ((rsidebar.hasClass('pmd-sidebar-right')) && rsidebar.hasClass('pmd-sidebar-open')) {
			overlay.addClass('pmd-sidebar-overlay-active');
			$('body').addClass("pmd-body-open")
        } else {
			overlay.removeClass('pmd-sidebar-overlay-active');
			$('body').removeClass("pmd-body-open")
		}
	});

	// Right Sidebar
	$('.pmd-topbar-toggle').on( 'click', function(e) {
		pmdtopbartoggle.toggleClass('pmd-sidebar-open');
    });

	$('.topbar-close').on('click', function() {
        pmdtopbartoggle.removeClass('pmd-sidebar-open');
    });

	// Nave bar in Sidebar
    $('.pmd-navbar-toggle').on('click', function(e) {
		pmdnavbarsidebar.toggleClass('pmd-sidebar-open');
        if ((pmdnavbarsidebar.hasClass('pmd-navbar-sidebar')) && pmdnavbarsidebar.hasClass('pmd-sidebar-open')) {
        	overlay.addClass('pmd-sidebar-overlay-active');
			$('body').addClass("pmd-body-open")
        } else {
        	overlay.removeClass('pmd-sidebar-overlay-active');
			$('body').removeClass("pmd-body-open")
		}
    });

	// Overlay
	overlay.on( 'click', function(e) {
    	$(this).removeClass('pmd-sidebar-overlay-active');
    	$('.pmd-sidebar').removeClass('pmd-sidebar-open');
		$('.pmd-navbar-sidebar').removeClass('pmd-sidebar-open');
		$('body').removeClass("pmd-body-open")
		 event.stopPropagation();
	});

	// Window load browser resize position
	if($(window).width() < 1200){
		sidebar.removeClass('pmd-sidebar-open pmd-sidebar-slide-push');
		lsidebar.addClass('pmd-sidebar-left-fixed');
		rsidebar.addClass('pmd-sidebar-right');
		toggleButtons.css('display', 'inherit');
		$('body').removeClass("pmd-body-open")
	}

});

// window resize position
$(window).resize(function(){
	if($(window).width() < 1200){
		sidebar.removeClass('pmd-sidebar-open pmd-sidebar-slide-push');
		lsidebar.addClass('pmd-sidebar-left-fixed');
		rsidebar.addClass('pmd-sidebar-right');
		toggleButtons.css('display', 'inherit');
		overlay.removeClass('pmd-sidebar-overlay-active');
		$('body').removeClass("pmd-body-open")
	} else{
		lsidebar.removeClass('pmd-sidebar-left-fixed').addClass('pmd-sidebar-open pmd-sidebar-slide-push');
		rsidebar.removeClass('pmd-sidebar-right');
		overlay.removeClass('pmd-sidebar-overlay-active');
		$('body').removeClass("pmd-body-open")
	}
});

(function(removeClass){
	jQuery.fn.removeClass = function( value ) {
		if ( value && typeof value.test === "function" ) {
			for ( var i = 0, l = this.length; i < l; i++ ) {
				var elem = this[i];
				if ( elem.nodeType === 1 && elem.className ) {
					var classNames = elem.className.split( /\s+/ );

					for ( var n = classNames.length; n--; ) {
						if ( value.test(classNames[n]) ) {
							classNames.splice(n, 1);
						}
					}
					elem.className = jQuery.trim( classNames.join(" ") );
				}
			}
		} else {
			removeClass.call(this, value);
		}
		return this;
	}
})(jQuery.fn.removeClass);

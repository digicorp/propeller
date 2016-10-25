/*!
 * Propeller v1.0.0 (http://propeller.in)
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

// Dropdown -----------------------------------------------------------------//
(function($) {
	$('.pmd-dropdown .dropdown-menu').wrap( "<div class='pmd-dropdown-menu-container'></div>" );
	$('.pmd-dropdown .dropdown-menu').before('<div class="pmd-dropdown-menu-bg"></div>');
	var dropdown = $('.pmd-dropdown');
	var pmdsidebardropdown = function() {
		if ( $(window).width() < 767) {
			// Add slidedown animation to dropdown
			dropdown.off('show.bs.dropdown');
			dropdown.on('show.bs.dropdown', function(e){
				var that = $(this).find('.dropdown-menu');
				var w = that.outerWidth();
				var h = that.outerHeight();
				var dcdmc = that.closest('.pmd-dropdown-menu-container');
				var dcdmbg = dcdmc.find('.pmd-dropdown-menu-bg');
				$dataSidebar = $(this).find('.dropdown-toggle').attr("data-sidebar");
				var dropdowncenter = that.hasClass('pmd-dropdown-menu-center');
				if ( $dataSidebar == 'true') {
					that.first().stop(true, true).slideDown(300);
					$(this).addClass('pmd-sidebar-dropdown');
				} else if ( dropdowncenter ) {
					$('.dropdown-menu').removeAttr('style');
					that.first().stop(true, true).slideDown(300);
				} else {
				 // that.first().stop(true, true).show();
					dcdmc.css({'width':w + 'px', 'height':h + 'px'}, 0);
					dcdmc.find('.pmd-dropdown-menu-bg').css({'width':w + 'px', 'height':h + 'px'});
					that.css("clip","rect(0 "+w+"px "+h+"px 0)");
					if( that.hasClass('dropdown-menu-right')){
						dcdmbg.addClass('pmd-dropdown-menu-bg-right');
						dcdmc.css({"right":"0", "left":"auto"})
					} else if (that.hasClass('pmd-dropdown-menu-top-left')){
						dcdmbg.addClass('pmd-dropdown-menu-bg-bottom-left');
					} else if (that.hasClass('pmd-dropdown-menu-top-right')){
						dcdmbg.addClass('pmd-dropdown-menu-bg-bottom-right');
						dcdmc.css({"right":"0", "left":"auto"})
					} 
				}
			});
			// Add slideup animation to dropdown
			dropdown.off('hide.bs.dropdown');
			dropdown.on('hide.bs.dropdown', function(e){
				$dataSidebar = $(this).find('.dropdown-toggle').attr("data-sidebar");
				var dropdowncenter = $(this).find('.dropdown-menu').hasClass('pmd-dropdown-menu-center');
				var that = $(this).find('.dropdown-menu');
				var w = that.outerWidth();
				var h = that.outerHeight();
				var dcdmc = that.closest('.pmd-dropdown-menu-container');
				var dcdmbg = dcdmc.find('.pmd-dropdown-menu-bg');
				if ($dataSidebar == 'true') {
					that.first().stop(true, true).slideUp(300);
				} else if (dropdowncenter) {
					$('.dropdown-menu').removeAttr('style');
					that.first().stop(true, true).slideUp(300);
				} else {
					that.css("clip","rect(0 0 0 0)");
					dcdmc.removeAttr('style');
					dcdmbg.removeAttr('style');
					if(that.hasClass('dropdown-menu-right')){
						that.css("clip","rect(0 "+w+"px 0 "+w+"px)");
					} else if (that.hasClass('pmd-dropdown-menu-top-right')){
						that.css("clip","rect(0 "+w+"px 0 "+w+"px)");
					} 
				}
			});
		} else {
			// Add slidedown animation to dropdown
			$('.dropdown-menu').removeAttr('style');
			dropdown.off('show.bs.dropdown');
			dropdown.on('show.bs.dropdown', function(e){
			//	$('.dropdown-menu').css({'clip':'rect(0 0 0 0)'});
				$dataSidebar = $(this).find('.dropdown-toggle').attr("data-sidebar");
				var hassidebar = $(this).closest('.pmd-sidebar').hasClass('pmd-sidebar');
				var dropdowncenter = $(this).find('.dropdown-menu').hasClass('pmd-dropdown-menu-center');
				var that = $(this).find('.dropdown-menu');
				var w = that.outerWidth();
				var h = that.outerHeight();
				var dcdmc = that.closest('.pmd-dropdown-menu-container');
				var dcdmbg = dcdmc.find('.pmd-dropdown-menu-bg');
				
				if (hassidebar) {
					that.first().stop(true, true).slideDown();
				} else if ( dropdowncenter ) {
					if(!$(this).parents().hasClass("pmd-sidebar")){
						$('.dropdown-menu').removeAttr('style');
					}
					that.first().stop(true, true).slideDown();
				} else {
					// that.show();
					if(!$(this).parents().hasClass("pmd-sidebar")){
						$('.dropdown-menu').removeAttr('style');
						$('.pmd-sidebar .open .dropdown-menu').css('display','block');
					}
					dcdmc.css({'width':w + 'px', 'height':h + 'px'}, 200);
					dcdmbg.css({'width':w + 'px', 'height':h + 'px'});
					if( that.hasClass('dropdown-menu-right')){
						that.css("clip","rect(0 "+w+"px "+h+"px 0)");
						dcdmbg.addClass('pmd-dropdown-menu-bg-right');
						dcdmc.css({"right":"0", "left":"auto"})
					} else if (that.hasClass('pmd-dropdown-menu-top-left')){
						that.css("clip","rect(0 "+w+"px "+h+"px 0)");
						dcdmbg.addClass('pmd-dropdown-menu-bg-bottom-left');
					} else if (that.hasClass('pmd-dropdown-menu-top-right')){
						that.css("clip","rect(0 "+w+"px "+h+"px 0)");
						dcdmbg.addClass('pmd-dropdown-menu-bg-bottom-right');
						dcdmc.css({"right":"0", "left":"auto"})
					} else {
						that.css("clip","rect(0 "+w+"px "+h+"px 0)");
					}
				}
				this.closable = false;
			});
			dropdown.on('click', function(e){
				// $('.dropdown-menu').removeAttr('style');
				var hassidebar = $(this).closest('.pmd-sidebar').hasClass('pmd-sidebar');
				var that = $(this).find('.dropdown-menu');
				if (hassidebar && !$(this).hasClass("open")) {
					dropdown.removeClass("open");
					$('.dropdown-menu').slideUp(300);
				//	 $(this).addClass("open");
				}else if($(this).parents("aside").hasClass("pmd-sidebar")){
					$('.dropdown-menu').slideUp(300);
				}
				
				this.closable = true; 
			});
			// Add slideup animation to dropdown
			dropdown.off('hide.bs.dropdown');
			dropdown.on('hide.bs.dropdown', function(e){
				if($(this).parents("aside").hasClass("pmd-sidebar")) {
					return this.closable;	
				}
				else{
					$dataSidebar = $(this).find('.dropdown-toggle').attr("data-sidebar");
					var hassidebar = $(this).closest('.pmd-sidebar').hasClass('pmd-sidebar');
					var dropdowncenter = $(this).find('.dropdown-menu').hasClass('pmd-dropdown-menu-center');
					var that = $(this).find('.dropdown-menu');
					var w = that.outerWidth();
					var h = that.outerHeight();
					var dcdmc = that.closest('.pmd-dropdown-menu-container');
					var dcdmbg = dcdmc.find('.pmd-dropdown-menu-bg');
					if (hassidebar) {
						that.first().stop(true, true).slideUp(300);
					}
					else  if (dropdowncenter) {
						if(!$(this).parents().hasClass("pmd-sidebar")){
							$('.dropdown-menu').removeAttr('style');
						}
						that.first().stop(true, true).slideUp(300);
					} else {
						if(!$(this).parents().hasClass("pmd-sidebar")){
							$('.dropdown-menu').removeAttr('style');
							$('.pmd-sidebar .open .dropdown-menu').css('display','block');
						}
						that.css("clip","rect(0 0 0 0)");
						dcdmc.removeAttr('style');
						dcdmbg.removeAttr('style');
						if(that.hasClass('dropdown-menu-right')){
							that.css("clip","rect(0 "+w+"px 0 "+w+"px)");
						} else if (that.hasClass('pmd-dropdown-menu-top-right')){
							that.css("clip","rect(0 "+w+"px 0 "+w+"px)");
						} 
					}
				}
			});	
		}
	}
	pmdsidebardropdown();
	$(window).resize(function(){
		pmdsidebardropdown();
	});
})(jQuery);

/*!
 * Propeller v1.1.0 (http://propeller.in): dropdown.js
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */
$( document ).ready(function() {
	$('.pmd-dropdown .dropdown-menu').wrap( "<div class='pmd-dropdown-menu-container'></div>" );
	$('.pmd-dropdown .dropdown-menu').before('<div class="pmd-dropdown-menu-bg"></div>');
	
	var dropdown = $('.pmd-dropdown');
	var pmdsidebardropdown = function() {
		if ( $(window).width() < 767) {
			var w = dropdown.find('.dropdown-menu').outerWidth();
			var h = dropdown.find('.dropdown-menu').outerHeight();
			dropdown.find('.dropdown-menu-right').css("clip","rect(0 "+w+"px 0 "+w+"px)");
			dropdown.find('.pmd-dropdown-menu-top-left').css("clip","rect("+h+"px 0 "+h+"px 0)");
			dropdown.find('.pmd-dropdown-menu-top-right').css("clip","rect("+h+"px "+w+"px "+h+"px "+w+"px)");
			// Add slidedown animation to dropdown
			dropdown.off('show.bs.dropdown');
			dropdown.on('show.bs.dropdown', function(){
				var that = $(this).find('.dropdown-menu');
				var w = that.outerWidth();
				var h = that.outerHeight();
				var dcdmc = that.closest('.pmd-dropdown-menu-container');
				var dcdmbg = dcdmc.find('.pmd-dropdown-menu-bg');
				var $dataSidebar = $(this).find('.dropdown-toggle').attr("data-sidebar");
				var dropdowncenter = that.hasClass('pmd-dropdown-menu-center');
				if ( $dataSidebar == 'true') {
					that.first().stop(true, true).slideDown(300);
					$(this).addClass('pmd-sidebar-dropdown');
				} else if ( dropdowncenter ) {
					$('.dropdown-menu').removeAttr('style');
					that.first().stop(true, true).slideDown(300);
				} else {
					dcdmc.css({'width':w + 'px', 'height':h + 'px'});
					dcdmbg.css({'width':w + 'px', 'height':h + 'px'});
					if( that.hasClass('dropdown-menu-right')){
					   setTimeout( function(){
						that.css("clip","rect(0 "+w+"px "+h+"px 0)");
					   }, 10);
					   dcdmbg.addClass('pmd-dropdown-menu-bg-right');
					   dcdmc.css({"right":"0", "left":"auto"})
					} else if (that.hasClass('pmd-dropdown-menu-top-left')){
						setTimeout( function(){
						that.css("clip","rect(0 "+w+"px "+h+"px 0)");
						},10);
						dcdmbg.addClass('pmd-dropdown-menu-bg-bottom-left');
					} else if (that.hasClass('pmd-dropdown-menu-top-right')){
						setTimeout( function(){
						that.css("clip","rect(0 "+w+"px "+h+"px 0)");
						},10);
						dcdmbg.addClass('pmd-dropdown-menu-bg-bottom-right');
						dcdmc.css({"right":"0", "left":"auto"})
					} else {
						setTimeout( function(){
						that.css("clip","rect(0 "+w+"px "+h+"px 0)");
						},10);
					}
				}
			});
			// Add slideup animation to dropdown
			dropdown.off('hide.bs.dropdown');
			dropdown.on('hide.bs.dropdown', function(){
				var $dataSidebar = $(this).find('.dropdown-toggle').attr("data-sidebar");
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
					if( that.hasClass('dropdown-menu-right')){
						that.css("clip","rect(0 "+w+"px 0 "+w+"px)");
					} else if (that.hasClass('pmd-dropdown-menu-top-left')){
						that.css("clip","rect("+h+"px 0 "+h+"px 0)");
					} else if (that.hasClass('pmd-dropdown-menu-top-right')){
						that.css("clip","rect("+h+"px "+w+"px "+h+"px "+w+"px)");
					} 
				}
			});
		} else {
			// Add slidedown animation to dropdown
			$('.dropdown-menu').removeAttr('style');
			var we = dropdown.find('.dropdown-menu').outerWidth();
			var he = dropdown.find('.dropdown-menu').outerHeight();
			dropdown.find('.dropdown-menu-right').css("clip","rect(0 "+we+"px 0 "+we+"px)");
			dropdown.find('.pmd-dropdown-menu-top-left').css("clip","rect("+he+"px 0 "+he+"px 0)");
			dropdown.find('.pmd-dropdown-menu-top-right').css("clip","rect("+he+"px "+we+"px "+he+"px "+we+"px)");
			
			dropdown.off('show.bs.dropdown');
			dropdown.on('show.bs.dropdown', function(){
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
					dcdmc.css({'width':w + 'px', 'height':h + 'px'});
					dcdmbg.css({'width':w + 'px', 'height':h + 'px'});
					if( that.hasClass('dropdown-menu-right')){
					   setTimeout( function(){
						that.css("clip","rect(0 "+w+"px "+h+"px 0)");
					   }, 10);
					   dcdmbg.addClass('pmd-dropdown-menu-bg-right');
					   dcdmc.css({"right":"0", "left":"auto"})
					} else if (that.hasClass('pmd-dropdown-menu-top-left')){
						setTimeout( function(){
						that.css("clip","rect(0 "+w+"px "+h+"px 0)");
						},10);
						dcdmbg.addClass('pmd-dropdown-menu-bg-bottom-left');
					} else if (that.hasClass('pmd-dropdown-menu-top-right')){
						setTimeout( function(){
						that.css("clip","rect(0 "+w+"px "+h+"px 0)");
						},10);
						dcdmbg.addClass('pmd-dropdown-menu-bg-bottom-right');
						dcdmc.css({"right":"0", "left":"auto"})
					} else {
						setTimeout( function(){
						that.css("clip","rect(0 "+w+"px "+h+"px 0)");
						},10);
					}
				}
				this.closable = false;
			});
			dropdown.on('click', function(){
				var hassidebar = $(this).closest('.pmd-sidebar').hasClass('pmd-sidebar');
				if (hassidebar && !$(this).hasClass("open")) {
					dropdown.removeClass("open");
					$('.dropdown-menu').slideUp(300);
				}else if($(this).parents("aside").hasClass("pmd-sidebar")){
					$('.dropdown-menu').slideUp(300);
				}
				
				this.closable = true; 
			});
			// Add slideup animation to dropdown
			dropdown.off('hide.bs.dropdown');
			dropdown.on('hide.bs.dropdown', function(){
				if($(this).parents("aside").hasClass("pmd-sidebar")) {
					return this.closable;	
				}
				else{
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
						that.css("clip","rect(0 0 0 0)");
						dcdmc.removeAttr('style');
						dcdmbg.removeAttr('style');
						if( that.hasClass('dropdown-menu-right')){
							that.css("clip","rect(0 "+w+"px 0 "+w+"px)");
						} else if (that.hasClass('pmd-dropdown-menu-top-left')){
							that.css("clip","rect("+h+"px 0 "+h+"px 0)");
						} else if (that.hasClass('pmd-dropdown-menu-top-right')){
							that.css("clip","rect("+h+"px "+w+"px "+h+"px "+w+"px)");
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
});	
	
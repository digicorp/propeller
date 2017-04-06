
/*!
 * Propeller v1.1.0 (http://propeller.in): tab.js
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

(function($) {
	$.fn.pmdTab = function( ){
		return this.each( function() {
			
			var $this = $(this),
				// $tabSet,
				$wrapper = $('.pmd-tabs-scroll-container');
				
			var widthOfList = function(){
				var itemsWidth = 0;
				$this.find('li').each(function(){
					var itemWidth = $(this)[0].getBoundingClientRect().width;
					itemsWidth+=itemWidth;
				});
				return itemsWidth;
			};
			var appendulwidth = function(){

				var hasclass = $this.attr("class");
				$("."+hasclass+":hidden").not("script").addClass("notVisible");
				$this.parents(":hidden").not("script").find("ul.nav-tabs").addClass("notVisible");
				
				if($this.find('ul.nav-tabs').hasClass("nav-justified")){
					$this.find('ul.nav-tabs').width("100%")
				} else if ($this.hasClass("notVisible")){
				}else {
					$this.find('ul.nav-tabs').width(widthOfList());	
				}
			};
			
			var getLeftPosi = function(){
				return $this.find('ul.nav-tabs').position().left;
			};
			
			var reAdjust = function(){
				// var $buttonWidth = $this.find('.pmd-tabs-scroll-right').outerWidth();
				if (($this.outerWidth()) < widthOfList()) {
					
					var navScrolledRight = $this.find('.pmd-tabs-scroll-container').scrollLeft(),
						navWrapWidth = $this.width(),
						navWidth = $this.find(".nav-tabs").width(),
						ammountRight = navWidth - navScrolledRight - navWrapWidth;

					if(ammountRight > 0){
						$this.find('.pmd-tabs-scroll-right').show();
				//		$this.find('.pmd-tabs-scroll-container').css('padding-right', $buttonWidth + 'px');
					}
				}
				else {
					$this.find('.pmd-tabs-scroll-right').hide();
			//		$this.find('.pmd-tabs-scroll-container').css('padding-right', '0px');
				}
				if (getLeftPosi()<0) {
					var navScrolledLeft = $this.find('.pmd-tabs-scroll-container').scrollLeft(),
						ammountLeft = navScrolledLeft;
					if(ammountLeft > 0){
				//		$this.find('.pmd-tabs-scroll-container').css('padding-left', $buttonWidth + 'px');
						$this.find('.pmd-tabs-scroll-left').show();
					}
				}
				else {
					// $('.item').animate({left:"-="+getLeftPosi()+"px"},'slow');
					$this.find('.pmd-tabs-scroll-left').hide();
			//		$this.find('.pmd-tabs-scroll-container').css('padding-left', '0px');
				}
			}
			var activeTabCenter = function(){
				var	$tabWidth = $this.outerWidth(),
					$middlePosition = $tabWidth / 2,
					$tabWrapperLeft = $this.offset().left,
					$sliderActive = $this.find('ul li.active'),
					$activeWidth = $sliderActive.outerWidth(),
					$tabHalfWidth = $activeWidth / 2,
					$tableftScroll = $this.find('.pmd-tabs-scroll-container').scrollLeft(),
					$tableftPosi = $this.find('ul li.active').offset().left,
					$tabCenterPosi = $tableftPosi - $middlePosition - $tabWrapperLeft + $tableftScroll + $tabHalfWidth;
					$this.find('.pmd-tabs-scroll-container').animate({scrollLeft:$tabCenterPosi},1);
			}
			appendulwidth();
			reAdjust();
			activeTabCenter();
			
			$(window).on('resize',function(){  
				setTimeout (function(){
					appendulwidth();
					reAdjust();
					activeTabCenter();
				},150);
			});
			
			/*******************/
			var sliderLoad = function(){
				var $slider = $this.find('.pmd-tab-active-bar'),
					$sliderActive = $this.find('ul li.active'),
					$isX = $sliderActive.offset().left,
					$navX = $this.find(".nav").offset().left,
					$wrapperLeft = $this.offset().left,
					$sliderLeft = $isX - $wrapperLeft,
					$finalPossion = $wrapperLeft - $navX + $isX - $wrapperLeft;
										
				if ($navX < $wrapperLeft){
					$slider.width($sliderActive.width() + "px").css("left",$finalPossion + "px");
				}else {
					$slider.width($sliderActive.width() + "px").css("left",$sliderLeft + "px");
				}
				$this.find("ul li").click(function(){
					var $thisWidth = $(this).width() + "px",
						$newLeft = $(this).offset().left - $wrapperLeft,
						$navX = $(this).closest(".nav").offset().left;
						$finalPossion = $wrapperLeft - $navX + $newLeft;

						$slider.width($thisWidth).css("left", $finalPossion + "px");
				});
			};
			
			sliderLoad();
			
			$(window).on("resize",function(){
				sliderLoad();
			});
			
			/*******************/
			$this.find('.pmd-tabs-scroll-right').on("click",function() {
				var $tabSet = '',
					$wrapper = $(this).prev(".pmd-tabs-scroll-container"),
					$tab = $wrapper.find(".nav-tabs li"),
					$thisWidht = $(this).outerWidth(),
					$navCotainer = $this.outerWidth(),
					$wrapperRight = $this.offset().left + $navCotainer;
					
				$tab.each(function() {
					var SuspectTabLeft = $(this).offset().left;
					var SuspectTabRight = $(this).offset().left + $(this).outerWidth();
					$(this).removeClass('prev-tab');
					if (SuspectTabLeft < $wrapperRight && SuspectTabRight > $wrapperRight){
						$tabSet =  SuspectTabRight - $wrapperRight + $thisWidht;
						$(this).addClass('last-tab');	
						$(this).prev().removeClass('last-tab');
					}
				});
				var finalTab = $wrapper.find('.last-tab').next().length;
				if ( finalTab === 0) {
					var lastTabRight = $wrapper.find('.last-tab').offset().left + $wrapper.find('.last-tab').outerWidth();
					var NewScrollAmount = lastTabRight - $wrapperRight ;
					$wrapper.animate({scrollLeft: '+='+ NewScrollAmount })
					$(this).fadeOut('slow');	
				}
				else {
					$wrapper.animate({scrollLeft: '+='+ $tabSet});			
				}
				$(this).parents('.pmd-tabs').find('.pmd-tabs-scroll-left').fadeIn('slow');
			});
			/*******************/
			
			/*******************/
			$this.find('.pmd-tabs-scroll-left').on("click",function() {
				var $wrapper = $(this).next(".pmd-tabs-scroll-container"),
					$tab = $wrapper.find(".nav-tabs li"),
					$thisWidht = $(this).outerWidth(),
					$wrapperLeft = $this.offset().left,
					$tabSetLeft = '';
					
				$tab.each(function() {
					var SuspectTabLeft = $(this).offset().left;
					var SuspectTabRight = $(this).offset().left + $(this).outerWidth();
					$(this).removeClass('last-tab');
					if (SuspectTabLeft < $wrapperLeft && SuspectTabRight > $wrapperLeft){
						$tabSetLeft =  $wrapperLeft - SuspectTabLeft + $thisWidht;
						$(this).addClass('prev-tab');	
						$(this).next().removeClass('prev-tab');
					}
				});
				var finalTab = $wrapper.find('.prev-tab').prev().length;
				
				if ( finalTab === 0) {
					var lastTableft = $wrapper.find('.prev-tab').offset().left;
					var NewScrollAmount = $wrapperLeft - lastTableft ;
					$wrapper.animate({scrollLeft: '-='+ NewScrollAmount })
					$(this).fadeOut('slow');	
			//		$this.find('.pmd-tabs-scroll-container').css('padding-left', '0px');
				}
				else {
					$wrapper.animate({scrollLeft: '-='+ $tabSetLeft});			
				}
				$(this).parents('.pmd-tabs').find('.pmd-tabs-scroll-right').fadeIn('slow');
			//	$this.find('.pmd-tabs-scroll-container').css('padding-left', $thisWidht);
			});
			
			$this.find('ul li').on('click',function(){
				$wrapper = $(this).closest(".pmd-tabs-scroll-container");
					//setTabActive()
				
				var activeLeft = $(this).offset().left;
				var activeRight = $(this).offset().left + $(this).outerWidth();
				var $navCotainer = $this.outerWidth();
				var $wrapperRight = $this.offset().left + $navCotainer;
				var $buttonWidth = $('.pmd-tabs-scroll-right').outerWidth();
				var $wrapperLeft = $this.offset().left;
				var cuttRight = $wrapperRight - $buttonWidth;
				var cuttleft = $wrapperLeft + $buttonWidth;
				if (activeLeft < cuttleft && activeRight > cuttleft){
					
					var setLeft = $wrapperLeft - activeLeft + $buttonWidth;
					$wrapper.animate({scrollLeft: '-=' + setLeft });			
					$(this).parents('.pmd-tabs').find('.pmd-tabs-scroll-right').fadeIn('slow');
				}
				if (activeLeft < cuttRight && activeRight > cuttRight) {
					var setRight = activeRight - $wrapperRight + $buttonWidth;
					$wrapper.animate({scrollLeft: '+=' + setRight });
					$(this).parents('.pmd-tabs').find('.pmd-tabs-scroll-left').fadeIn('slow');
				}
			});
		});
	};
}(jQuery));
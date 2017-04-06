"use strict";

/*!
 * Propeller v1.1.0 (http://propeller.in)
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

// Propeller form ------------------------------------------------------//
$(document).ready(function () {
	// paper input
	$(".pmd-textfield-focused").remove();
	$(".pmd-textfield .form-control").after('<span class="pmd-textfield-focused"></span>');
	// floating label
	$('.pmd-textfield input.form-control').each(function () {
		if ($(this).val() !== "") {
			$(this).closest('.pmd-textfield').addClass("pmd-textfield-floating-label-completed");
		}
	});
	// floating change label
	$(".pmd-textfield input.form-control").on('change', function () {
		if ($(this).val() !== "") {
			$(this).closest('.pmd-textfield').addClass("pmd-textfield-floating-label-completed");
		}
	});
	// floating label animation
	$("body").on("focus", ".pmd-textfield .form-control", function () {
		$(this).closest('.pmd-textfield').addClass("pmd-textfield-floating-label-active pmd-textfield-floating-label-completed");
	});
	// remove floating label animation
	$("body").on("focusout", ".pmd-textfield .form-control", function () {
		if ($(this).val() === "") {
			$(this).closest('.pmd-textfield').removeClass("pmd-textfield-floating-label-completed");
		}
		$(this).closest('.pmd-textfield').removeClass("pmd-textfield-floating-label-active");
	});
});

/*!
 * Propeller v1.1.0 (http://propeller.in): checkbox.js
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

$(document).ready(function () {
	$('.pmd-checkbox input').after('<span class="pmd-checkbox-label">&nbsp;</span>');
	// Ripple Effect //
	$(".pmd-checkbox-ripple-effect").on('mousedown', function (e) {
		var rippler = $(this);
		$('.ink').remove();
		// create .ink element if it doesn't exist
		if (rippler.find(".ink").length === 0) {
			rippler.append('<span class="ink"></span>');
		}
		var ink = rippler.find(".ink");
		// prevent quick double clicks
		ink.removeClass("animate");
		// set .ink diametr
		if (!ink.height() && !ink.width()) {
			//	var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
			ink.css({ height: 20, width: 20 });
		}
		// get click coordinates
		var x = e.pageX - rippler.offset().left - ink.width() / 2;
		var y = e.pageY - rippler.offset().top - ink.height() / 2;
		// set .ink position and add class .animate
		ink.css({
			top: y + 'px',
			left: x + 'px'
		}).addClass("animate");
		setTimeout(function () {
			ink.remove();
		}, 1500);
	});
});

/*!
 * Propeller v1.1.0 (http://propeller.in): radio.js
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

$(document).ready(function () {
	$('.pmd-radio input').after('<span class="pmd-radio-label">&nbsp;</span>');
	//-- Radio Ripple Effect --//
	$(".pmd-radio-ripple-effect").on('mousedown', function (e) {
		var rippler = $(this);
		$('.ink').remove();
		// create .ink element if it doesn't exist
		if (rippler.find(".ink").length === 0) {
			rippler.append('<span class="ink"></span>');
		}
		var ink = rippler.find(".ink");
		// prevent quick double clicks
		ink.removeClass("animate");
		// set .ink diametr
		if (!ink.height() && !ink.width()) {
			// var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
			ink.css({ height: 15, width: 15 });
		}
		// get click coordinates
		var x = e.pageX - rippler.offset().left - ink.width() / 2;
		var y = e.pageY - rippler.offset().top - ink.height() / 2;
		// set .ink position and add class .animate
		ink.css({
			top: y + 'px',
			left: x + 'px'
		}).addClass("animate");
		setTimeout(function () {
			ink.remove();
		}, 1500);
	});
});

/*!
 * Propeller v1.1.0 (http://propeller.in): button.js
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

$(document).ready(function () {
	$(".pmd-ripple-effect").on('mousedown touchstart', function (e) {
		var rippler = $(this);
		$('.ink').remove();
		// create .ink element if it doesn't exist
		if (rippler.find(".ink").length === 0) {
			rippler.append("<span class='ink'></span>");
		}
		var ink = rippler.find(".ink");
		// prevent quick double clicks
		ink.removeClass("animate");
		// set .ink diametr
		if (!ink.height() && !ink.width()) {
			var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
			ink.css({ height: d, width: d });
		}
		// get click coordinates
		var x = e.pageX - rippler.offset().left - ink.width() / 2;
		var y = e.pageY - rippler.offset().top - ink.height() / 2;
		// set .ink position and add class .animate
		ink.css({
			top: y + 'px',
			left: x + 'px'
		}).addClass("animate");

		setTimeout(function () {
			ink.remove();
		}, 1500);
	});
});

/*!
 * Propeller v1.1.0 (http://propeller.in): dropdown.js
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */
$(document).ready(function () {
	$('.pmd-dropdown .dropdown-menu').wrap("<div class='pmd-dropdown-menu-container'></div>");
	$('.pmd-dropdown .dropdown-menu').before('<div class="pmd-dropdown-menu-bg"></div>');

	var dropdown = $('.pmd-dropdown');
	var pmdsidebardropdown = function pmdsidebardropdown() {
		if ($(window).width() < 767) {
			var w = dropdown.find('.dropdown-menu').outerWidth();
			var h = dropdown.find('.dropdown-menu').outerHeight();
			dropdown.find('.dropdown-menu-right').css("clip", "rect(0 " + w + "px 0 " + w + "px)");
			dropdown.find('.pmd-dropdown-menu-top-left').css("clip", "rect(" + h + "px 0 " + h + "px 0)");
			dropdown.find('.pmd-dropdown-menu-top-right').css("clip", "rect(" + h + "px " + w + "px " + h + "px " + w + "px)");
			// Add slidedown animation to dropdown
			dropdown.off('show.bs.dropdown');
			dropdown.on('show.bs.dropdown', function () {
				var that = $(this).find('.dropdown-menu');
				var w = that.outerWidth();
				var h = that.outerHeight();
				var dcdmc = that.closest('.pmd-dropdown-menu-container');
				var dcdmbg = dcdmc.find('.pmd-dropdown-menu-bg');
				var $dataSidebar = $(this).find('.dropdown-toggle').attr("data-sidebar");
				var dropdowncenter = that.hasClass('pmd-dropdown-menu-center');
				if ($dataSidebar == 'true') {
					that.first().stop(true, true).slideDown(300);
					$(this).addClass('pmd-sidebar-dropdown');
				} else if (dropdowncenter) {
					$('.dropdown-menu').removeAttr('style');
					that.first().stop(true, true).slideDown(300);
				} else {
					dcdmc.css({ 'width': w + 'px', 'height': h + 'px' });
					dcdmbg.css({ 'width': w + 'px', 'height': h + 'px' });
					if (that.hasClass('dropdown-menu-right')) {
						setTimeout(function () {
							that.css("clip", "rect(0 " + w + "px " + h + "px 0)");
						}, 10);
						dcdmbg.addClass('pmd-dropdown-menu-bg-right');
						dcdmc.css({ "right": "0", "left": "auto" });
					} else if (that.hasClass('pmd-dropdown-menu-top-left')) {
						setTimeout(function () {
							that.css("clip", "rect(0 " + w + "px " + h + "px 0)");
						}, 10);
						dcdmbg.addClass('pmd-dropdown-menu-bg-bottom-left');
					} else if (that.hasClass('pmd-dropdown-menu-top-right')) {
						setTimeout(function () {
							that.css("clip", "rect(0 " + w + "px " + h + "px 0)");
						}, 10);
						dcdmbg.addClass('pmd-dropdown-menu-bg-bottom-right');
						dcdmc.css({ "right": "0", "left": "auto" });
					} else {
						setTimeout(function () {
							that.css("clip", "rect(0 " + w + "px " + h + "px 0)");
						}, 10);
					}
				}
			});
			// Add slideup animation to dropdown
			dropdown.off('hide.bs.dropdown');
			dropdown.on('hide.bs.dropdown', function () {
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
					that.css("clip", "rect(0 0 0 0)");
					dcdmc.removeAttr('style');
					dcdmbg.removeAttr('style');
					if (that.hasClass('dropdown-menu-right')) {
						that.css("clip", "rect(0 " + w + "px 0 " + w + "px)");
					} else if (that.hasClass('pmd-dropdown-menu-top-left')) {
						that.css("clip", "rect(" + h + "px 0 " + h + "px 0)");
					} else if (that.hasClass('pmd-dropdown-menu-top-right')) {
						that.css("clip", "rect(" + h + "px " + w + "px " + h + "px " + w + "px)");
					}
				}
			});
		} else {
			// Add slidedown animation to dropdown
			$('.dropdown-menu').removeAttr('style');
			var we = dropdown.find('.dropdown-menu').outerWidth();
			var he = dropdown.find('.dropdown-menu').outerHeight();
			dropdown.find('.dropdown-menu-right').css("clip", "rect(0 " + we + "px 0 " + we + "px)");
			dropdown.find('.pmd-dropdown-menu-top-left').css("clip", "rect(" + he + "px 0 " + he + "px 0)");
			dropdown.find('.pmd-dropdown-menu-top-right').css("clip", "rect(" + he + "px " + we + "px " + he + "px " + we + "px)");

			dropdown.off('show.bs.dropdown');
			dropdown.on('show.bs.dropdown', function () {
				var hassidebar = $(this).closest('.pmd-sidebar').hasClass('pmd-sidebar');
				var dropdowncenter = $(this).find('.dropdown-menu').hasClass('pmd-dropdown-menu-center');
				var that = $(this).find('.dropdown-menu');
				var w = that.outerWidth();
				var h = that.outerHeight();
				var dcdmc = that.closest('.pmd-dropdown-menu-container');
				var dcdmbg = dcdmc.find('.pmd-dropdown-menu-bg');
				if (hassidebar) {
					that.first().stop(true, true).slideDown();
				} else if (dropdowncenter) {
					if (!$(this).parents().hasClass("pmd-sidebar")) {
						$('.dropdown-menu').removeAttr('style');
					}
					that.first().stop(true, true).slideDown();
				} else {
					dcdmc.css({ 'width': w + 'px', 'height': h + 'px' });
					dcdmbg.css({ 'width': w + 'px', 'height': h + 'px' });
					if (that.hasClass('dropdown-menu-right')) {
						setTimeout(function () {
							that.css("clip", "rect(0 " + w + "px " + h + "px 0)");
						}, 10);
						dcdmbg.addClass('pmd-dropdown-menu-bg-right');
						dcdmc.css({ "right": "0", "left": "auto" });
					} else if (that.hasClass('pmd-dropdown-menu-top-left')) {
						setTimeout(function () {
							that.css("clip", "rect(0 " + w + "px " + h + "px 0)");
						}, 10);
						dcdmbg.addClass('pmd-dropdown-menu-bg-bottom-left');
					} else if (that.hasClass('pmd-dropdown-menu-top-right')) {
						setTimeout(function () {
							that.css("clip", "rect(0 " + w + "px " + h + "px 0)");
						}, 10);
						dcdmbg.addClass('pmd-dropdown-menu-bg-bottom-right');
						dcdmc.css({ "right": "0", "left": "auto" });
					} else {
						setTimeout(function () {
							that.css("clip", "rect(0 " + w + "px " + h + "px 0)");
						}, 10);
					}
				}
				this.closable = false;
			});
			dropdown.on('click', function () {
				var hassidebar = $(this).closest('.pmd-sidebar').hasClass('pmd-sidebar');
				if (hassidebar && !$(this).hasClass("open")) {
					dropdown.removeClass("open");
					$('.dropdown-menu').slideUp(300);
				} else if ($(this).parents("aside").hasClass("pmd-sidebar")) {
					$('.dropdown-menu').slideUp(300);
				}

				this.closable = true;
			});
			// Add slideup animation to dropdown
			dropdown.off('hide.bs.dropdown');
			dropdown.on('hide.bs.dropdown', function () {
				if ($(this).parents("aside").hasClass("pmd-sidebar")) {
					return this.closable;
				} else {
					var hassidebar = $(this).closest('.pmd-sidebar').hasClass('pmd-sidebar');
					var dropdowncenter = $(this).find('.dropdown-menu').hasClass('pmd-dropdown-menu-center');
					var that = $(this).find('.dropdown-menu');
					var w = that.outerWidth();
					var h = that.outerHeight();
					var dcdmc = that.closest('.pmd-dropdown-menu-container');
					var dcdmbg = dcdmc.find('.pmd-dropdown-menu-bg');
					if (hassidebar) {
						that.first().stop(true, true).slideUp(300);
					} else if (dropdowncenter) {
						if (!$(this).parents().hasClass("pmd-sidebar")) {
							$('.dropdown-menu').removeAttr('style');
						}
						that.first().stop(true, true).slideUp(300);
					} else {
						that.css("clip", "rect(0 0 0 0)");
						dcdmc.removeAttr('style');
						dcdmbg.removeAttr('style');
						if (that.hasClass('dropdown-menu-right')) {
							that.css("clip", "rect(0 " + w + "px 0 " + w + "px)");
						} else if (that.hasClass('pmd-dropdown-menu-top-left')) {
							that.css("clip", "rect(" + h + "px 0 " + h + "px 0)");
						} else if (that.hasClass('pmd-dropdown-menu-top-right')) {
							that.css("clip", "rect(" + h + "px " + w + "px " + h + "px " + w + "px)");
						}
					}
				}
			});
		}
	};
	pmdsidebardropdown();
	$(window).resize(function () {
		pmdsidebardropdown();
	});
});

/*!
 * Propeller v1.1.0 (http://propeller.in): accordion.js
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

$(document).ready(function () {
	$(function () {
		$(".collapse.in").parents(".panel").addClass("active");
		$('a[data-toggle="collapse"]').on('click', function () {
			var objectID = $(this).attr('href');
			var expandale = $(this).attr('data-expandable');
			if (expandale == 'true') {
				if ($(objectID).hasClass('in')) {
					$(objectID).collapse('hide');
				} else {
					$(objectID).collapse('show');
				}
			}
			var $expandable = $(this).attr("data-expandable"),
			    $expanded = $(this).attr("aria-expanded"),
			    $current = $(this).parent().parent().parent().parent().attr("id");
			if ($expandable == "false") {
				if ($expanded == "true") {
					//alert("not exp closed")
					$("#" + $current + " .active").removeClass("active");
				} else {
					//alert("not exp open")
					$("#" + $current + " .active").removeClass("active");
					$(this).parents('.panel').addClass("active");
				}
			}
			if ($expandable == "true") {
				if ($expanded == "true") {
					$(this).parents('.panel').addClass("active");
				} else {
					$(this).parents('.panel').removeClass("active");
				}
			}
		});

		// custom function for expand all and collapse all button 
		$('#expandAll').on('click', function () {
			var GetID = $(this).attr("data-target");
			$('#' + GetID + ' ' + 'a[data-toggle="collapse"]').each(function () {
				var objectID = $(this).attr('href');
				if ($(objectID).hasClass('in') === false) {
					$(objectID).collapse('show');
					$(objectID).parent().addClass("active");
				}
			});
		});

		//
		$('#collapseAll').on('click', function () {
			var GetID = $(this).attr("data-target");
			$('#' + GetID + ' ' + 'a[data-toggle="collapse"]').each(function () {
				var objectID = $(this).attr('href');
				$(objectID).collapse('hide');
				$(objectID).parent().removeClass("active");
			});
		});
	});
});

/*!
 * Propeller v1.1.0 (http://propeller.in): alert.js
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

$(document).ready(function () {
	$(".pmd-alert-toggle").click(function () {
		var $positionX = $(this).attr("data-positionX"),
		    $positionY = $(this).attr("data-positionY"),
		    $dataEffect = $(this).attr("data-effect"),
		    $dataMessage = $(this).attr("data-message"),
		    $dataType = $(this).attr("data-type"),
		    $actionText = $(this).attr("data-action-text"),
		    $action = $(this).attr("data-action"),
		    $duration;

		if ($(window).width() < 768) {
			$positionX = "center";
		} else {
			$positionX = $positionX;
		}

		if (!$(".pmd-alert-container." + $positionX + "." + $positionY).length) {
			$('body').append("<div class='pmd-alert-container " + $positionX + " " + $positionY + "'></div>");
		}

		var $currentPath = $(".pmd-alert-container." + $positionX + "." + $positionY);
		function notificationValue() {
			if ($action == "true") {
				if ($actionText == null) {
					$notification = "<div class='pmd-alert' data-action='true'>" + $dataMessage + "<a href='javascript:void(0)' class='pmd-alert-close'>×</a></div>";
				} else {
					$notification = "<div class='pmd-alert' data-action='true'>" + $dataMessage + "<a href='javascript:void(0)' class='pmd-alert-close'>" + $actionText + "</a></div>";
				}
				return $notification;
			} else {
				if ($actionText == null) {
					$notification = "<div class='pmd-alert' data-action='false'>" + $dataMessage + "</div>";
				} else {
					$notification = "<div class='pmd-alert' data-action='false'>" + $dataMessage + "<a href='javascript:void(0)' class='pmd-alert-close'>" + $actionText + "</a></div>";
				}
				return $notification;
			}
		}
		var $notification = notificationValue();
		var boxLength = $(".pmd-alert-container." + $positionX + "." + $positionY + " .pmd-alert").length;

		if ($(this).attr("data-duration") !== undefined) {
			$duration = $(this).attr("data-duration");
		} else {
			$duration = 3000;
		}

		if (boxLength > 0) {
			if ($positionY == 'top') {
				$currentPath.append($notification);
			} else {
				$currentPath.prepend($notification);
			}
			$currentPath.width($(".pmd-alert").outerWidth());
			if ($action == "true") {
				$currentPath.children("[data-action='true']").addClass("visible" + " " + $dataEffect);
			} else {
				$currentPath.children("[data-action='false']").addClass("visible" + " " + $dataEffect).delay($duration).slideUp(function () {
					$(this).removeClass("visible" + " " + $dataEffect).remove();
				});
			}
			$currentPath.children(".pmd-alert").eq(boxLength).addClass($dataType);
		} else {
			$currentPath.append($notification);
			$currentPath.width($(".pmd-alert").outerWidth());
			if ($action == "true") {
				$currentPath.children("[data-action='true']").addClass("visible" + " " + $dataEffect);
			} else {
				$currentPath.children("[data-action='false']").addClass("visible" + " " + $dataEffect).delay($duration).slideUp(function () {
					$(this).removeClass("visible" + " " + $dataEffect).remove();
				});
			}
			$currentPath.children(".pmd-alert").eq(boxLength).addClass($dataType);
		}
		var $middle = $(".pmd-alert").outerWidth() / 2;
		$(".pmd-alert-container.center").css("marginLeft", "-" + $middle + "px");
	});

	$(document).on("click", ".pmd-alert-close", function () {
		var $dataEffect = $(this).attr("data-effect");
		$(this).parents(".pmd-alert").slideUp(function () {
			$(this).removeClass("visible" + " " + $dataEffect).remove();
		});
	});
});

/*!
 * Propeller v1.1.0 (http://propeller.in): popover.js
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

$(document).ready(function () {

	$('.popover-html[data-toggle="popover"]').popover({
		html: true,
		content: function content() {
			var currentID = $(this).attr("data-id");
			var currentHTML = $(currentID).html();
			return currentHTML;
		},
		placement: function placement(pop, dom_el) {
			var range = 200;
			var curPlacement = $(dom_el).attr("data-placement");
			var scrolled = $(window).scrollTop();
			var winWidth = $(window).width();
			var winHeight = $(window).height();
			var elWidth = $(dom_el).outerWidth();
			var elHeight = $(dom_el).outerHeight();
			var elTop = $(dom_el).offset().top;
			var elLeft = $(dom_el).offset().left;
			var curPosTop = elTop - scrolled;
			var curPosLeft = elLeft;
			var curPosRight = winWidth - curPosLeft - elWidth;
			var curPosBottom = winHeight - curPosTop - elHeight;
			if (curPlacement == "left" && curPosLeft <= range) {
				return 'right';
			} else if (curPlacement == "right" && curPosRight <= range) {
				return 'left';
			} else if (curPlacement == "top" && curPosTop <= range) {
				return 'bottom';
			}
			if (curPlacement == "bottom" && curPosBottom <= range) {
				return 'top';
			} else {
				return curPlacement;
			}
		}
	});

	var options = {
		placement: function placement(pop, dom_el) {
			var range = 200;
			var curPlacement = $(dom_el).attr("data-placement");
			var scrolled = $(window).scrollTop();
			var winWidth = $(window).width();
			var winHeight = $(window).height();
			var elWidth = $(dom_el).outerWidth();
			var elHeight = $(dom_el).outerHeight();
			var elTop = $(dom_el).offset().top;
			var elLeft = $(dom_el).offset().left;
			var curPosTop = elTop - scrolled;
			var curPosLeft = elLeft;
			var curPosRight = winWidth - curPosLeft - elWidth;
			var curPosBottom = winHeight - curPosTop - elHeight;
			if (curPlacement == "left" && curPosLeft <= range) {
				return 'right';
			} else if (curPlacement == "right" && curPosRight <= range) {
				return 'left';
			} else if (curPlacement == "top" && curPosTop <= range) {
				return 'bottom';
			}
			if (curPlacement == "bottom" && curPosBottom <= range) {
				return 'top';
			} else {
				return curPlacement;
			}
		}
	};

	$('[data-toggle="popover"]').popover(options);

	$('[data-toggle="popover"]').on('shown.bs.popover', function () {
		var colorClass = $(this).attr("data-color");
		$(".popover").addClass(colorClass);
	}).on('hidden.bs.popover', function () {
		var colorClass = $(this).attr("data-color");
		$(".popover").removeClass(colorClass);
	});
});

/*!
 * Propeller v1.1.0 (http://propeller.in): tab.js
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

(function ($) {
	$.fn.pmdTab = function () {
		return this.each(function () {

			var $this = $(this),

			// $tabSet,
			$wrapper = $('.pmd-tabs-scroll-container');

			var widthOfList = function widthOfList() {
				var itemsWidth = 0;
				$this.find('li').each(function () {
					var itemWidth = $(this)[0].getBoundingClientRect().width;
					itemsWidth += itemWidth;
				});
				return itemsWidth;
			};
			var appendulwidth = function appendulwidth() {

				var hasclass = $this.attr("class");
				$("." + hasclass + ":hidden").not("script").addClass("notVisible");
				$this.parents(":hidden").not("script").find("ul.nav-tabs").addClass("notVisible");

				if ($this.find('ul.nav-tabs').hasClass("nav-justified")) {
					$this.find('ul.nav-tabs').width("100%");
				} else if ($this.hasClass("notVisible")) {} else {
					$this.find('ul.nav-tabs').width(widthOfList());
				}
			};

			var getLeftPosi = function getLeftPosi() {
				return $this.find('ul.nav-tabs').position().left;
			};

			var reAdjust = function reAdjust() {
				// var $buttonWidth = $this.find('.pmd-tabs-scroll-right').outerWidth();
				if ($this.outerWidth() < widthOfList()) {

					var navScrolledRight = $this.find('.pmd-tabs-scroll-container').scrollLeft(),
					    navWrapWidth = $this.width(),
					    navWidth = $this.find(".nav-tabs").width(),
					    ammountRight = navWidth - navScrolledRight - navWrapWidth;

					if (ammountRight > 0) {
						$this.find('.pmd-tabs-scroll-right').show();
						//		$this.find('.pmd-tabs-scroll-container').css('padding-right', $buttonWidth + 'px');
					}
				} else {
					$this.find('.pmd-tabs-scroll-right').hide();
					//		$this.find('.pmd-tabs-scroll-container').css('padding-right', '0px');
				}
				if (getLeftPosi() < 0) {
					var navScrolledLeft = $this.find('.pmd-tabs-scroll-container').scrollLeft(),
					    ammountLeft = navScrolledLeft;
					if (ammountLeft > 0) {
						//		$this.find('.pmd-tabs-scroll-container').css('padding-left', $buttonWidth + 'px');
						$this.find('.pmd-tabs-scroll-left').show();
					}
				} else {
					// $('.item').animate({left:"-="+getLeftPosi()+"px"},'slow');
					$this.find('.pmd-tabs-scroll-left').hide();
					//		$this.find('.pmd-tabs-scroll-container').css('padding-left', '0px');
				}
			};
			var activeTabCenter = function activeTabCenter() {
				var $tabWidth = $this.outerWidth(),
				    $middlePosition = $tabWidth / 2,
				    $tabWrapperLeft = $this.offset().left,
				    $sliderActive = $this.find('ul li.active'),
				    $activeWidth = $sliderActive.outerWidth(),
				    $tabHalfWidth = $activeWidth / 2,
				    $tableftScroll = $this.find('.pmd-tabs-scroll-container').scrollLeft(),
				    $tableftPosi = $this.find('ul li.active').offset().left,
				    $tabCenterPosi = $tableftPosi - $middlePosition - $tabWrapperLeft + $tableftScroll + $tabHalfWidth;
				$this.find('.pmd-tabs-scroll-container').animate({ scrollLeft: $tabCenterPosi }, 1);
			};
			appendulwidth();
			reAdjust();
			activeTabCenter();

			$(window).on('resize', function () {
				setTimeout(function () {
					appendulwidth();
					reAdjust();
					activeTabCenter();
				}, 150);
			});

			/*******************/
			var sliderLoad = function sliderLoad() {
				var $slider = $this.find('.pmd-tab-active-bar'),
				    $sliderActive = $this.find('ul li.active'),
				    $isX = $sliderActive.offset().left,
				    $navX = $this.find(".nav").offset().left,
				    $wrapperLeft = $this.offset().left,
				    $sliderLeft = $isX - $wrapperLeft,
				    $finalPossion = $wrapperLeft - $navX + $isX - $wrapperLeft;

				if ($navX < $wrapperLeft) {
					$slider.width($sliderActive.width() + "px").css("left", $finalPossion + "px");
				} else {
					$slider.width($sliderActive.width() + "px").css("left", $sliderLeft + "px");
				}
				$this.find("ul li").click(function () {
					var $thisWidth = $(this).width() + "px",
					    $newLeft = $(this).offset().left - $wrapperLeft,
					    $navX = $(this).closest(".nav").offset().left;
					$finalPossion = $wrapperLeft - $navX + $newLeft;

					$slider.width($thisWidth).css("left", $finalPossion + "px");
				});
			};

			sliderLoad();

			$(window).on("resize", function () {
				sliderLoad();
			});

			/*******************/
			$this.find('.pmd-tabs-scroll-right').on("click", function () {
				var $tabSet = '',
				    $wrapper = $(this).prev(".pmd-tabs-scroll-container"),
				    $tab = $wrapper.find(".nav-tabs li"),
				    $thisWidht = $(this).outerWidth(),
				    $navCotainer = $this.outerWidth(),
				    $wrapperRight = $this.offset().left + $navCotainer;

				$tab.each(function () {
					var SuspectTabLeft = $(this).offset().left;
					var SuspectTabRight = $(this).offset().left + $(this).outerWidth();
					$(this).removeClass('prev-tab');
					if (SuspectTabLeft < $wrapperRight && SuspectTabRight > $wrapperRight) {
						$tabSet = SuspectTabRight - $wrapperRight + $thisWidht;
						$(this).addClass('last-tab');
						$(this).prev().removeClass('last-tab');
					}
				});
				var finalTab = $wrapper.find('.last-tab').next().length;
				if (finalTab === 0) {
					var lastTabRight = $wrapper.find('.last-tab').offset().left + $wrapper.find('.last-tab').outerWidth();
					var NewScrollAmount = lastTabRight - $wrapperRight;
					$wrapper.animate({ scrollLeft: '+=' + NewScrollAmount });
					$(this).fadeOut('slow');
				} else {
					$wrapper.animate({ scrollLeft: '+=' + $tabSet });
				}
				$(this).parents('.pmd-tabs').find('.pmd-tabs-scroll-left').fadeIn('slow');
			});
			/*******************/

			/*******************/
			$this.find('.pmd-tabs-scroll-left').on("click", function () {
				var $wrapper = $(this).next(".pmd-tabs-scroll-container"),
				    $tab = $wrapper.find(".nav-tabs li"),
				    $thisWidht = $(this).outerWidth(),
				    $wrapperLeft = $this.offset().left,
				    $tabSetLeft = '';

				$tab.each(function () {
					var SuspectTabLeft = $(this).offset().left;
					var SuspectTabRight = $(this).offset().left + $(this).outerWidth();
					$(this).removeClass('last-tab');
					if (SuspectTabLeft < $wrapperLeft && SuspectTabRight > $wrapperLeft) {
						$tabSetLeft = $wrapperLeft - SuspectTabLeft + $thisWidht;
						$(this).addClass('prev-tab');
						$(this).next().removeClass('prev-tab');
					}
				});
				var finalTab = $wrapper.find('.prev-tab').prev().length;

				if (finalTab === 0) {
					var lastTableft = $wrapper.find('.prev-tab').offset().left;
					var NewScrollAmount = $wrapperLeft - lastTableft;
					$wrapper.animate({ scrollLeft: '-=' + NewScrollAmount });
					$(this).fadeOut('slow');
					//		$this.find('.pmd-tabs-scroll-container').css('padding-left', '0px');
				} else {
					$wrapper.animate({ scrollLeft: '-=' + $tabSetLeft });
				}
				$(this).parents('.pmd-tabs').find('.pmd-tabs-scroll-right').fadeIn('slow');
				//	$this.find('.pmd-tabs-scroll-container').css('padding-left', $thisWidht);
			});

			$this.find('ul li').on('click', function () {
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
				if (activeLeft < cuttleft && activeRight > cuttleft) {

					var setLeft = $wrapperLeft - activeLeft + $buttonWidth;
					$wrapper.animate({ scrollLeft: '-=' + setLeft });
					$(this).parents('.pmd-tabs').find('.pmd-tabs-scroll-right').fadeIn('slow');
				}
				if (activeLeft < cuttRight && activeRight > cuttRight) {
					var setRight = activeRight - $wrapperRight + $buttonWidth;
					$wrapper.animate({ scrollLeft: '+=' + setRight });
					$(this).parents('.pmd-tabs').find('.pmd-tabs-scroll-left').fadeIn('slow');
				}
			});
		});
	};
})(jQuery);

/*!
 * Propeller v1.1.0 (http://propeller.in): sidebar.js
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

var overlay = $('.pmd-sidebar-overlay');
var sidebar = $('.pmd-sidebar');
var lsidebar = $('.pmd-sidebar-left');
var rsidebar = $('.pmd-sidebar-right-fixed');
var sidebar = $('.pmd-sidebar');
var toggleButtons = $('.pmd-sidebar-toggle');

$(document).ready(function () {

	var overlay = $('.pmd-sidebar-overlay');
	var sidebar = $('.pmd-sidebar');
	var lsidebar = $('.pmd-sidebar-left');
	var rsidebar = $('.pmd-sidebar-right-fixed');
	var pmdnavbarsidebar = $('.pmd-navbar-sidebar');
	var toggleButtons = $('.pmd-sidebar-toggle');
	var pmdtopbartoggle = $('.topbar-fixed');

	// Left Sidebar
	$('.pmd-sidebar-toggle').on('click', function () {
		lsidebar.toggleClass('pmd-sidebar-open');
		if ((lsidebar.hasClass('pmd-sidebar-left-fixed') || lsidebar.hasClass('pmd-sidebar-right-fixed')) && lsidebar.hasClass('pmd-sidebar-open')) {
			overlay.addClass('pmd-sidebar-overlay-active');
			$('body').addClass("pmd-body-open");
		} else {
			overlay.removeClass('pmd-sidebar-overlay-active');
			$('body').removeClass("pmd-body-open");
		}
	});

	$(".pmd-sidebar .dropdown-menu, .pmd-sidebar-dropdown .dropdown-menu").click(function (event) {
		event.stopPropagation();
	});

	// Right Sidebar
	$('.pmd-sidebar-toggle-right').on('click', function () {
		rsidebar.toggleClass('pmd-sidebar-open');
		if (rsidebar.hasClass('pmd-sidebar-right') && rsidebar.hasClass('pmd-sidebar-open')) {
			overlay.addClass('pmd-sidebar-overlay-active');
			$('body').addClass("pmd-body-open");
		} else {
			overlay.removeClass('pmd-sidebar-overlay-active');
			$('body').removeClass("pmd-body-open");
		}
	});

	// Right Sidebar
	$('.pmd-topbar-toggle').on('click', function () {
		pmdtopbartoggle.toggleClass('pmd-sidebar-open');
	});

	$('.topbar-close').on('click', function () {
		pmdtopbartoggle.removeClass('pmd-sidebar-open');
	});

	// Nave bar in Sidebar
	$('.pmd-navbar-toggle').on('click', function () {
		pmdnavbarsidebar.toggleClass('pmd-sidebar-open');
		if (pmdnavbarsidebar.hasClass('pmd-navbar-sidebar') && pmdnavbarsidebar.hasClass('pmd-sidebar-open')) {
			overlay.addClass('pmd-sidebar-overlay-active');
			$('body').addClass("pmd-body-open");
		} else {
			overlay.removeClass('pmd-sidebar-overlay-active');
			$('body').removeClass("pmd-body-open");
		}
	});

	// Overlay
	overlay.on('click', function () {
		$(this).removeClass('pmd-sidebar-overlay-active');
		$('.pmd-sidebar').removeClass('pmd-sidebar-open');
		$('.pmd-navbar-sidebar').removeClass('pmd-sidebar-open');
		$('body').removeClass("pmd-body-open");
		event.stopPropagation();
	});

	// Window load browser resize position
	if ($(window).width() < 1200) {
		sidebar.removeClass('pmd-sidebar-open pmd-sidebar-slide-push');
		lsidebar.addClass('pmd-sidebar-left-fixed');
		rsidebar.addClass('pmd-sidebar-right');
		toggleButtons.css('display', 'inherit');
		$('body').removeClass("pmd-body-open");
	}
});

// window resize position
$(window).resize(function () {
	if ($(window).width() < 1200) {
		sidebar.removeClass('pmd-sidebar-open pmd-sidebar-slide-push');
		lsidebar.addClass('pmd-sidebar-left-fixed');
		rsidebar.addClass('pmd-sidebar-right');
		toggleButtons.css('display', 'inherit');
		overlay.removeClass('pmd-sidebar-overlay-active');
		$('body').removeClass("pmd-body-open");
	} else {
		lsidebar.removeClass('pmd-sidebar-left-fixed').addClass('pmd-sidebar-open pmd-sidebar-slide-push');
		rsidebar.removeClass('pmd-sidebar-right');
		overlay.removeClass('pmd-sidebar-overlay-active');
		$('body').removeClass("pmd-body-open");
	}
});

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
//# sourceMappingURL=propeller.js.map

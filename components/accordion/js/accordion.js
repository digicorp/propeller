
/*!
 * Propeller v1.1.0 (http://propeller.in): accordion.js
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

$(document).ready(function() {
	$(function () {			
		$(".collapse.in").parents(".panel").addClass("active");
		$('a[data-toggle="collapse"]').on('click',function(){
			var objectID=$(this).attr('href');
			var expandale = $(this).attr('data-expandable');
			if (expandale == 'true') {
				if($(objectID).hasClass('in')){
					$(objectID).collapse('hide');
				}
				else {
					$(objectID).collapse('show');
				}
			}
			var $expandable = $(this).attr("data-expandable"),
				$expanded = $(this).attr("aria-expanded"),
				$current = $(this).parent().parent().parent().parent().attr("id");
			if ($expandable == "false") {
				if($expanded == "true") {
					//alert("not exp closed")
					$("#"+ $current +" .active").removeClass("active");
				}
				else {
					//alert("not exp open")
					$("#"+ $current +" .active").removeClass("active");
					$(this).parents('.panel').addClass("active");
				}
			}
			if  ($expandable == "true") {
				if($expanded == "true") {
					$(this).parents('.panel').addClass("active");
				}
				else {
					$(this).parents('.panel').removeClass("active");
				}
			}
		});
				
		// custom function for expand all and collapse all button 
		$('#expandAll').on('click',function(){
			var GetID = $(this).attr("data-target");
			$('#' + GetID +' '+'a[data-toggle="collapse"]').each(function(){
				var objectID=$(this).attr('href');
				if($(objectID).hasClass('in')===false)
				{
					 $(objectID).collapse('show');
					 $(objectID).parent().addClass("active");
				}
			});
		});
		
		//
		$('#collapseAll').on('click',function(){
			var GetID = $(this).attr("data-target");
			$('#' + GetID +' '+ 'a[data-toggle="collapse"]').each(function(){
				var objectID=$(this).attr('href');
				$(objectID).collapse('hide');
				$(objectID).parent().removeClass("active");
			});
		});
				
	});
});
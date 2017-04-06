
/*!
 * Propeller v1.1.0 (http://propeller.in): alert.js
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

$(document).ready(function() {
	$(".pmd-alert-toggle").click(function(){
		var $positionX = $(this).attr("data-positionX"),
			$positionY = $(this).attr("data-positionY"),
			$dataEffect = $(this).attr("data-effect"),
			$dataMessage = $(this).attr("data-message"),
			$dataType = $(this).attr("data-type"),
			$actionText = $(this).attr("data-action-text"),
			$action = $(this).attr("data-action"),
			$duration;	
			
		if($(window).width() < 768){
			$positionX = "center";
		}else {
			$positionX = $positionX;
		}		

		if(!$(".pmd-alert-container."+ $positionX +"."+ $positionY).length){
			$('body').append("<div class='pmd-alert-container "+$positionX+" "+$positionY+"'></div>");
		}
			
		var $currentPath = $(".pmd-alert-container."+ $positionX +"."+ $positionY);
		function notificationValue(){
			if($action == "true"){
				if($actionText == null){
					$notification =  "<div class='pmd-alert' data-action='true'>"+$dataMessage+"<a href='javascript:void(0)' class='pmd-alert-close'>×</a></div>";
				}else{
					$notification =  "<div class='pmd-alert' data-action='true'>"+$dataMessage+"<a href='javascript:void(0)' class='pmd-alert-close'>"+$actionText+"</a></div>";	
				}
				return $notification;
			}else {
				if($actionText == null){
					$notification = "<div class='pmd-alert' data-action='false'>"+$dataMessage+"</div>";
				}else{
					$notification =  "<div class='pmd-alert' data-action='false'>"+$dataMessage+"<a href='javascript:void(0)' class='pmd-alert-close'>"+$actionText+"</a></div>";	
				}
				return $notification;
			}
		}
		var $notification = notificationValue();
		var boxLength = $(".pmd-alert-container."+ $positionX +"."+ $positionY + " .pmd-alert").length;
		
		if($(this).attr("data-duration") !== undefined){
			$duration = $(this).attr("data-duration");
		}else {
			$duration = 3000;
		}
		
		if (boxLength > 0) {
			if ($positionY == 'top') {
				$currentPath.append($notification);
			}
			else {
				$currentPath.prepend($notification);
			}
			$currentPath.width($(".pmd-alert").outerWidth());
			if($action == "true"){
				$currentPath.children("[data-action='true']").addClass("visible" +" "+ $dataEffect);	
			}else{
				$currentPath.children("[data-action='false']").addClass("visible" +" "+ $dataEffect).delay($duration).slideUp(
					function(){
						$(this).removeClass("visible" +" "+ $dataEffect).remove();
					});	
			}
			$currentPath.children(".pmd-alert").eq(boxLength).addClass($dataType);
		}else {
			$currentPath.append($notification);
			$currentPath.width($(".pmd-alert").outerWidth());
			if($action == "true"){
				$currentPath.children("[data-action='true']").addClass("visible" +" "+ $dataEffect);	
			}else{
				$currentPath.children("[data-action='false']").addClass("visible" +" "+ $dataEffect).delay($duration).slideUp(
					function(){
						$(this).removeClass("visible" +" "+ $dataEffect).remove();
					});	
			}
			$currentPath.children(".pmd-alert").eq(boxLength).addClass($dataType);
		}
		var $middle = $(".pmd-alert").outerWidth() / 2;  
		$(".pmd-alert-container.center").css("marginLeft","-" + $middle+"px");
	});
	
	$(document).on("click",".pmd-alert-close",function(){
		var $dataEffect = $(this).attr("data-effect");
		$(this).parents(".pmd-alert").slideUp(function(){$(this).removeClass("visible" +" "+ $dataEffect).remove();});	
	});
});
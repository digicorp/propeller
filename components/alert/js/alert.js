/*!
 * Propeller v1.0.0 (http://propeller.in)
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

$(document).ready(function() {
	$(".pmd-alert-toggle").click(function(){
		$positionX = $(this).attr("data-positionX");
		$positionY = $(this).attr("data-positionY");
		$dataEffect = $(this).attr("data-effect");
		$dataRevert = $(this).attr("data-revert");
		$dataMessage = $(this).attr("data-message");
		$dataType = $(this).attr("data-type");
		$actionText = $(this).attr("data-action-text");
		$action = $(this).attr("data-action");		

		if(!$(".pmd-alert-container."+ $positionX +"."+ $positionY).length){
			$('body').append("<div class='pmd-alert-container "+$positionX+" "+$positionY+"'></div>");
		}
			
		$currentPath = $(".pmd-alert-container."+ $positionX +"."+ $positionY);
		
		$notification = notificationValue();
		
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
		
		var boxLength = $(".pmd-alert-container."+ $positionX +"."+ $positionY + " .pmd-alert").length;
		
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
				$currentPath.children("[data-action='false']").addClass("visible" +" "+ $dataEffect).delay(3000).slideUp(
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
				$currentPath.children("[data-action='false']").addClass("visible" +" "+ $dataEffect).delay(3000).slideUp(
					function(){
						$(this).removeClass("visible" +" "+ $dataEffect).remove();
					});	
			}
			$currentPath.children(".pmd-alert").eq(boxLength).addClass($dataType);
		}
		$middle = $(".pmd-alert").outerWidth() / 2;  
		$(".pmd-alert-container.center").css("marginLeft","-" + $middle+"px");
	});
	
	$(document).on("click",".pmd-alert-close",function(){
		$(this).parents(".pmd-alert").slideUp(function(){$(this).removeClass("visible" +" "+ $dataEffect).remove();});	
	});
});
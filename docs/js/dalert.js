$(document).ready(function() {
			
		$notiWrap = "<div class='notification-container top left'></div>" +
			"<div class='notification-container top center'></div>" +
			"<div class='notification-container top right'></div>" +
			"<div class='notification-container bottom left'></div>" +
			"<div class='notification-container bottom center'></div>" +
			"<div class='notification-container bottom right'></div>" ;

		$('body').append($notiWrap);

		$(".notification-trigger").click(function(){


			$positionX = $(this).attr("data-positionX");
			$positionY = $(this).attr("data-positionY");
			$dataEffect = $(this).attr("data-effect");
			$dataRevert = $(this).attr("data-revert");
			$dataMessage = $(this).attr("data-message");
			$dataType = $(this).attr("data-type");
			$notification = "<div class='notificationBox'>"+$dataMessage+"</div>";
			$currentPath = $(".notification-container."+ $positionX +"."+ $positionY);
			
			var boxLength = $(".notification-container."+ $positionX +"."+ $positionY + " .notificationBox").length;

			
			
			if (boxLength > 0) {
				if ($positionY == 'top') {
					$currentPath.append($notification);
				}
				else {
					$currentPath.prepend($notification);
				}

				$currentPath.width($(".notificationBox").outerWidth());
				$currentPath.children(".notificationBox").addClass("visible" +" "+ $dataEffect).delay(3000).slideUp(function(){$(this).removeClass("visible" +" "+ $dataEffect).remove();});
				$currentPath.children(".notificationBox").eq(boxLength).addClass($dataType);

				
			}else {
				$currentPath.append($notification);
				$currentPath.width($(".notificationBox").outerWidth());
				$currentPath.children(".notificationBox").addClass("visible" +" "+ $dataEffect).delay(3000).slideUp(function(){$(this).removeClass("visible" +" "+ $dataEffect).remove();});
				$currentPath.children(".notificationBox").eq(boxLength).addClass($dataType);

			}

			$middle = $(".notificationBox").outerWidth() / 2;  
			$(".notification-container.center").css("marginLeft","-" + $middle+"px");
			
		});
		
		
	});
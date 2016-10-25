<!-- Jquery js -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Bootstrap js -->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Propeller ripple effect js -->
<script type="text/javascript" src="http://propeller.in/components/button/js/ripple-effect.js"></script>

<!-- Propeller popover js -->
<script>
	$(document).ready(function(){
		var options = {
			placement: function(pop, dom_el){
				var range = 200; 
				var curPlacement = $(dom_el).attr("data-placement");
				var scrolled = $(window).scrollTop();
				var winWidth = $(window).width();
				var winHeight = $(window).height();
				var elWidth = $(dom_el).outerWidth();
				var elHeight = $(dom_el).outerHeight();
				var elTop =  $(dom_el).offset().top;
				var elLeft =  $(dom_el).offset().left;
				var curPosTop =  elTop - scrolled;
				var curPosLeft =  elLeft;
				var curPosRight = winWidth - curPosLeft - elWidth;
				var curPosBottom = winHeight - curPosTop - elHeight;
				if(curPlacement == "left" && curPosLeft <= range){
					return 'right';	
				}
				else if(curPlacement == "right" && curPosRight <= range){
					return 'left';	
				}
				else if(curPlacement == "top" && curPosTop <= range){
					return 'bottom';	
				}
				if(curPlacement == "bottom" && curPosBottom <= range){
					return 'top';	
				}else {
					return curPlacement;
				}
			}
		};
		$('[data-toggle="popover"]').popover(options);
	});
</script>


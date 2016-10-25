<!-- Jquery js -->
<script src="http://propeller.in/assets/js/jquery.js"></script>

<!-- Propeller  js -->
<script type="text/javascript" src="http://propeller.in/assets/js/propeller.min.js"></script>

<!-- Text field js -->
<script>
$( document ).ready(function() {
	// Propeller  form ------------------------------------------------------//

	// paper input
	$(".paper-input-bar").remove();
	$(".paper-input .form-control").after('<span class="paper-input-bar"></span>');
	
	// floating label
	$('.paper-input input.form-control').each(function () {
		if($(this).val() != ""){
			$(this).closest('.paper-input').addClass("floating-label-completed");
	  	}
	});
	
	// floating label animation
	$("body").on("focus",".paper-input .form-control",function(){
    	$(this).closest('.paper-input').addClass("floating-label-active floating-label-completed");
    });
	
	// Ripple Effect -----------------------------------------------------------------//
	 $(".ripple-effect").on('mousedown touchstart', function(e) {
		var rippler = $(this);
		$('.ink').remove();
		// create .ink element if it doesn't exist
		if(rippler.find(".ink").length == 0) {
			rippler.append("<span class='ink'></span>");
		}
		var ink = rippler.find(".ink");
		// prevent quick double clicks
		ink.removeClass("animate");
		// set .ink diametr
		if(!ink.height() && !ink.width())
		{
			var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
			ink.css({height: d, width: d});
		}
		// get click coordinates
		var x = e.pageX - rippler.offset().left - ink.width()/2;
		var y = e.pageY - rippler.offset().top - ink.height()/2;
		// set .ink position and add class .animate
		ink.css({
		  top: y+'px',
		  left:x+'px'
		}).addClass("animate");
		
		setTimeout(function(){ 
			ink.remove();
		}, 1500);
	})
});
</script>
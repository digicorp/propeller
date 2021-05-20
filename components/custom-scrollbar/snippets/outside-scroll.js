<!-- Jquery js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- custom scrollbar plugin -->
<script type="text/javascript" language="javascript" src="https://opensource.propeller.in/components/custom-scrollbar/js/jquery.mCustomScrollbar.js"></script>

<script>
	(function($){
		$(window).load(function(){
			$("#content-3").mCustomScrollbar({
				scrollButtons:{enable:true},
				theme:"dark-thick",
				scrollbarPosition:"outside"
			});
		});
	})(jQuery);
</script>

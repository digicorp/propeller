<!-- Jquery js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- custom scrollbar plugin -->
<script type="text/javascript" language="javascript" src="http://propeller.in/components/custom-scrollbar/js/jquery.mCustomScrollbar.js"></script>

<script>
	(function($){
		$(window).load(function(){
			$("#content-9").mCustomScrollbar({
				scrollButtons:{enable:true,scrollType:"stepped"},
				keyboard:{scrollType:"stepped"},
				mouseWheel:{scrollAmount:188},
				theme:"rounded-light",
				autoExpandScrollbar:true,
				snapAmount:188,
				snapOffset:65
			});
		});
	})(jQuery);
</script>

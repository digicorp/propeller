<!-- jquery JS -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Bootstrap js -->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Propeller textfield js --> 
<script type="text/javascript" src="http://propeller.in/components/textfield/js/textfield.js"></script>

<!-- Datepicker moment with locales -->
<script type="text/javascript" language="javascript" src="http://propeller.in/components/datetimepicker/js/moment-with-locales.js"></script>

<!-- Propeller Bootstrap datetimepicker -->
<script type="text/javascript" language="javascript" src="http://propeller.in/components/datetimepicker/js/bootstrap-datetimepicker.js"></script>

<script>
	$("[data-header-left='true']").parent().addClass("pmd-navbar-left");
	
	// Datepicker left header
	$('#datepicker-left-header').datetimepicker({
		'format' : "YYYY-MM-DD HH:mm:ss", // HH:mm:ss
	});
</script>
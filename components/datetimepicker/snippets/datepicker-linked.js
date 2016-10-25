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
	// Linked date and time picker 
	// start date date and time picker 
	$('#datepicker-start').datetimepicker();

	// End date date and time picker 
	$('#datepicker-end').datetimepicker({
		useCurrent: false 
	});
	
	// start date picke on chagne event [select minimun date for end date datepicker]
	$("#datepicker-start").on("dp.change", function (e) {
		$('#datepicker-end').data("DateTimePicker").minDate(e.date);
	});
	// Start date picke on chagne event [select maxmimum date for start date datepicker]
	$("#datepicker-end").on("dp.change", function (e) {
		$('#datepicker-start').data("DateTimePicker").maxDate(e.date);
	});
</script>
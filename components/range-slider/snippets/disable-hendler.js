<!-- Jquery js -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Propeller checkbox js --> 
<script type="text/javascript" src="http://propeller.in/components/checkbox/js/checkbox.js"></script>

<!-- Propeller js -->
<script type="text/javascript" src="http://propeller.in/assets/js/propeller.min.js"></script>

<!-- Slider js -->
<script src="http://propeller.in/components/range-slider/js/wNumb.js"></script>
<script src="http://propeller.in/components/range-slider/js/nouislider.js"></script>
<script>
	// enable $ desable range slider
	var disableSingle = document.getElementById('disable-single'),
		singleCheckbox = document.getElementById('single-checkbox');
	function toggle ( element ){
		// If the checkbox is checked, disabled the slider.
		// Otherwise, re-enable it.
		if ( this.checked ) {
			element.setAttribute('disabled', true);
		} else {
			element.removeAttribute('disabled');
		}
	}
	noUiSlider.create(disableSingle, {
		start: 47,
		tooltips: [wNumb({ decimals: 0 }) ],
		connect: 'lower',
		range: {
			min: 0,
			max: 100
		}
	});
	singleCheckbox.addEventListener('click', function(){
		toggle.call(this, disableSingle);
	});
</script>
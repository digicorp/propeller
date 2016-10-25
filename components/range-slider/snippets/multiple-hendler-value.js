<!-- Jquery js -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Slider js -->
<script src="http://propeller.in/components/range-slider/js/wNumb.js"></script>
<script src="http://propeller.in/components/range-slider/js/nouislider.js"></script>
<script>
	// multiple handled with value 
	var pmdSliderValueRange = document.getElementById('pmd-slider-value-range');
	
	noUiSlider.create(pmdSliderValueRange, {
		start: [ 20, 80 ], // Handle start position
		connect: true, // Display a colored bar between the handles
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		format: wNumb({
			decimals: 0,
			thousand: '',
			postfix: '',
		}),
		range: { // Slider can select '0' to '100'
			'min': 0,
			'max': 100
		}
	});
	
	var valueMax = document.getElementById('value-max'),
		valueMin = document.getElementById('value-min');
	
	// When the slider value changes, update the input and span
	pmdSliderValueRange.noUiSlider.on('update', function( values, handle ) {
		if ( handle ) {
			valueMax.innerHTML = values[handle];
		} else {
			valueMin.innerHTML = values[handle];
		}
	});	
</script>
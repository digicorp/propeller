<!-- Jquery slider -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Propeller checkbox js --> 
<script type="text/javascript" src="http://propeller.in/components/checkbox/js/checkbox.js"></script>

<!-- Slider js -->
<script src="http://propeller.in/components/range-slider/js/wNumb.js"></script>
<script src="http://propeller.in/components/range-slider/js/nouislider.js"></script>
<script>
	// enable $ desable range slider
	var disableMultiple = document.getElementById('disable-multiple'),
		multipleCheckboxLeft = document.getElementById('multiple-checkbox-left'),
		multipleCheckboxRight = document.getElementById('multiple-checkbox-right'),
		origins = disableMultiple.getElementsByClassName('noUi-origin');
	
	function toggle ( element ){
	
		// If the checkbox is checked, disabled the slider.
		// Otherwise, re-enable it.
		if ( this.checked ) {
			element.setAttribute('disabled', true);
		} else {
			element.removeAttribute('disabled');
		}
	}
	
	noUiSlider.create(disableMultiple, {
		start: [15, 90],
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		connect: true,
		range: {
			min: 0,
			max: 100
		}
	});
	
	multipleCheckboxLeft.addEventListener('click', function(){
		toggle.call(this, origins[0]);
	});
	
	multipleCheckboxRight.addEventListener('click', function(){
		toggle.call(this, origins[1]);
	}); 

</script>
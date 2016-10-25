<!-- Jquery js-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Slider js -->
<script src="http://propeller.in/components/range-slider/js/wNumb.js"></script>
<script src="http://propeller.in/components/range-slider/js/nouislider.js"></script>
<script>
	// multiple range slider
	var pmdVerticleSliderRange = document.getElementById('pmd-ver-slider-range');
	noUiSlider.create(pmdVerticleSliderRange, {
		start: [30, 75],
		connect: true,
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		direction: 'rtl', // Put '0' at the bottom of the slider
		orientation: 'vertical', // Orient the slider vertically
		range: {
			'min': 0,
			'max': 100
		}
	});
	
	// multiple range slider with default tooltip open
	var pmdVerSliderRangeTooltip = document.getElementById('pmd-ver-slider-range-tooltip');
	noUiSlider.create(pmdVerSliderRangeTooltip, {
		start: [10, 50],
		connect: true,
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		direction: 'rtl', // Put '0' at the bottom of the slider
		orientation: 'vertical', // Orient the slider vertically
		range: {
			'min': 0,
			'max': 100
		}
	});
	
	// multiple range slider with default tooltip open
	var pmdVerSliderTooltipLowerRight = document.getElementById('pmd-ver-slider-range-tooltip-lower-right');
	noUiSlider.create(pmdVerSliderTooltipLowerRight, {
		start: [10, 50],
		connect: true,
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		direction: 'rtl', // Put '0' at the bottom of the slider
		orientation: 'vertical', // Orient the slider vertically
		range: {
			'min': 0,
			'max': 100
		}
	});
	
	// multiple range slider with default tooltip open
	var pmdVerSliderTooltipUpperRight = document.getElementById('pmd-ver-slider-range-tooltip-upper-right');
	noUiSlider.create(pmdVerSliderTooltipUpperRight, {
		start: [10, 50],
		connect: true,
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		direction: 'rtl', // Put '0' at the bottom of the slider
		orientation: 'vertical', // Orient the slider vertically
		range: {
			'min': 0,
			'max': 100
		}
	});
</script>
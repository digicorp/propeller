<!-- Jquery js -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Slider js -->
<script src="http://propeller.in/components/range-slider/js/wNumb.js"></script>
<script src="http://propeller.in/components/range-slider/js/nouislider.js"></script>
<script>
	// single range slider
	var pmdVerticleSlider = document.getElementById('pmd-ver-slider');
	noUiSlider.create(pmdVerticleSlider, {
		start: [ 30 ],
		connect: 'lower',
		direction: 'rtl', // Put '0' at the bottom of the slider
		orientation: 'vertical', // Orient the slider vertically
		tooltips: [wNumb({ decimals: 0 }) ],
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		}
	});

	// single range slider with step
	var pmdVerticleSliderStep = document.getElementById('pmd-ver-slider-step');
	noUiSlider.create(pmdVerticleSliderStep, {
		start: [ 30 ],
		connect: 'lower',
		direction: 'rtl', // Put '0' at the bottom of the slider
		tooltips: [wNumb({ decimals: 0 }) ],
		orientation: 'vertical', // Orient the slider vertically
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		},
		step: 10,
		pips: { // Show a scale with the slider
			mode: 'steps',
			density: 10
		}

	});

	// single range slider with default tooltip open
	var pmdVerSliderTooltip = document.getElementById('pmd-ver-slider-tooltip');
	noUiSlider.create(pmdVerSliderTooltip, {
		start: [ 25 ],
		connect: 'lower',
		tooltips: [wNumb({ decimals: 0 }) ],
		direction: 'rtl', // Put '0' at the bottom of the slider
		orientation: 'vertical', // Orient the slider vertically
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		}
	});

	// multiple range slider with default tooltip open
	var pmdVerSliderTooltipRight = document.getElementById('pmd-ver-slider-tooltip-right');
	noUiSlider.create(pmdVerSliderTooltipRight, {
		start: [ 30 ],
		connect: 'lower',
		direction: 'rtl', // Put '0' at the bottom of the slider
		orientation: 'vertical', // Orient the slider vertically
		tooltips: [wNumb({ decimals: 0 }) ],
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		}
	});	

</script>
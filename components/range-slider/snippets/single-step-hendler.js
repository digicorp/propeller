<!-- Jquery js -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Slider js -->
<script src="http://propeller.in/components/range-slider/js/wNumb.js"></script>
<script src="http://propeller.in/components/range-slider/js/nouislider.js"></script>
<script>
	// single range slider with step
	var pmdSliderStep = document.getElementById('pmd-slider-step');
	noUiSlider.create(pmdSliderStep, {
		start: [ 30 ],
		connect: 'lower',
		tooltips: [wNumb({ decimals: 0 }) ],
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
</script>
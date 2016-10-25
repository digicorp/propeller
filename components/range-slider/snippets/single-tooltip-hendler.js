<!-- Jquery js -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Slider js -->
<script src="http://propeller.in/components/range-slider/js/wNumb.js"></script>
<script src="http://propeller.in/components/range-slider/js/nouislider.js"></script>
<script>
	
	// single range slider with default tooltip open
	var pmdSliderTooltip = document.getElementById('pmd-slider-tooltip');
	noUiSlider.create(pmdSliderTooltip, {
		start: [ 25 ],
		connect: 'lower',
		tooltips: [wNumb({ decimals: 0 }) ],
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		}
	});
	
</script>
<!-- Jquery js -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Slider js -->
<script src="http://propeller.in/components/range-slider/js/wNumb.js"></script>
<script src="http://propeller.in/components/range-slider/js/nouislider.js"></script>
<script>
	// single handler slider with bottom tooltip open
	var pmdVerSliderTooltipBottom = document.getElementById('pmd-range-tooltip-bottom');
	noUiSlider.create(pmdVerSliderTooltipBottom, {
		start: [ 30 ],
		connect: 'lower',
		tooltips: [wNumb({ decimals: 0 }) ],
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		}
	});
	
</script>
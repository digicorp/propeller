<!-- Jquery js -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Slider js -->
<script src="http://propeller.in/components/range-slider/js/wNumb.js"></script>
<script src="http://propeller.in/components/range-slider/js/nouislider.js"></script>
<script>
	// multiple range slider with lower tooltip at bottom
	var pmdSliderRangeTooltip = document.getElementById('pmd-slider-range-tooltip-bottom-lower');
	noUiSlider.create(pmdSliderRangeTooltip, {
		start: [10, 50],
		connect: true,
		tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
		range: {
			'min': 0,
			'max': 100
		}
	});
</script>

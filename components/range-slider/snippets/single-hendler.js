<!-- jquery JS -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Slider js -->
<script src="http://propeller.in/components/range-slider/js/wNumb.js"></script>
<script src="http://propeller.in/components/range-slider/js/nouislider.js"></script>
<script>
	// single range slider
	var pmdSlider = document.getElementById('pmd-slider');
	noUiSlider.create(pmdSlider, {
		start: [ 30 ],
		connect: 'lower',
		tooltips: [wNumb({ decimals: 0 }) ],
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		}
	});
</script>
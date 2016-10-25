<!-- Jquery js -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Slider js -->
<script type="text/javascript" src="http://propeller.in/components/range-slider/js/jquery.nouislider.min.js"></script>
<script>
      $(function() {
        //$.material.init();
        $(".shor").noUiSlider({
          start: 40,
          //connect: "lower",
          range: {
            min: 0,
            max: 100
          }
        });

        $(".svert").noUiSlider({
          orientation: "vertical",
          start: 40,
          connect: "lower",
          range: {
            min: 0,
            max: 100
          }
        });
		
		// Create a new date from a string, return as a timestamp.
		function timestamp(str){
			return new Date(str).getTime();   
		}
		
		var dateSlider = document.getElementById('slider-date');
		
		noUiSlider.create(dateSlider, {
		// Create two timestamps to define a range.
			range: {
				min: timestamp('2010'),
				max: timestamp('2016')
			},
		
		// Steps of one week
			step: 7 * 24 * 60 * 60 * 1000,
		
		// Two more timestamps indicate the handle starting positions.
			start: [ timestamp('2011'), timestamp('2015') ],
		
		// No decimals
			format: wNumb({
				decimals: 0
			})
		});

		var dateValues = [
			document.getElementById('event-start'),
			document.getElementById('event-end')
		];
		
		dateSlider.noUiSlider.on('update', function( values, handle ) {
			dateValues[handle].innerHTML = formatDate(new Date(+values[handle]));
		});

		// Create a list of day and monthnames.
		var
			weekdays = [
				"Sunday", "Monday", "Tuesday",
				"Wednesday", "Thursday", "Friday",
				"Saturday"
			],
			months = [
				"January", "February", "March",
				"April", "May", "June", "July",
				"August", "September", "October",
				"November", "December"
			];
		
		// Append a suffix to dates.
		// Example: 23 => 23rd, 1 => 1st.
		function nth (d) {
		  if(d>3 && d<21) return 'th';
		  switch (d % 10) {
				case 1:  return "st";
				case 2:  return "nd";
				case 3:  return "rd";
				default: return "th";
			}
		}
		
		// Create a string representation of the date.
		function formatDate ( date ) {
			return weekdays[date.getDay()] + ", " +
				date.getDate() + nth(date.getDate()) + " " +
				months[date.getMonth()] + " " +
				date.getFullYear();
		}
		
      });
</script>
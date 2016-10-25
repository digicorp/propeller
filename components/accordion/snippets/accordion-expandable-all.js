<!-- jquery JS -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Bootstrap js -->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Propeller expand collapse js -->
<script>
	$(document).ready(function() {
		
		//custom function to add and remove active class
		$(function () {			
			$(".collapse.in").parents(".panel").addClass("active");
			$('a[data-toggle="collapse"]').on('click',function(){
				var objectID=$(this).attr('href');
				var expandale = $(this).attr('data-expandable');
				if (expandale == 'true') {
					if($(objectID).hasClass('in')){
						$(objectID).collapse('hide');
					}
					else {
						$(objectID).collapse('show');
					}
				}
				$accoID = $(this).parents(".panel-group").attr("id");
				$availiblity = $(this).parents(".panel").children(".in").length;
				$expandable = $(this).attr("data-expandable");
				$expanded = $(this).attr("aria-expanded");
				$current = $(this).parent().parent().parent().parent().attr("id");
				if ($expandable == "false") {
					if($expanded == "true") {
						$("#"+ $current +" .active").removeClass("active");
					}
					else {
						$("#"+ $current +" .active").removeClass("active");
						$(this).parents('.panel').addClass("active");
					}
				}
				if ($expandable == "true") {
					if($expanded == "true") {
						$(this).parents('.panel').addClass("active");
					}
					else {
						$(this).parents('.panel').removeClass("active");
					}
				}
            });
            
			// custom function for expand all and collapse all button 
			$('#expandAll').on('click',function(){
				var GetID = $(this).attr("data-target");
				$('#' + GetID +' '+'a[data-toggle="collapse"]').each(function(){
					var objectID=$(this).attr('href');
					if($(objectID).hasClass('in')===false)
					{
						$(objectID).collapse('show');
						$(objectID).parent().addClass("active");
					}
				});
			});
            // collapse    
			$('#collapseAll').on('click',function(){
				var GetID = $(this).attr("data-target");
				$('#' + GetID +' '+ 'a[data-toggle="collapse"]').each(function(){
					var objectID=$(this).attr('href');
					$(objectID).collapse('hide');
					$(objectID).parent().removeClass("active");
				});
			});
                    
		});
   });

</script>
// JavaScript Document


			$.fn.customSelectBox = function() {
				
				var name = 'Todd';
				
				alert(name);
				
				var Selectclass ="." + $(this).attr("class");
				var custom = $(Selectclass).length;
				//$slectedoption = '';
				///$dropTopPos = '';
				//$optionheight = '';
				
				
				$('select'+Selectclass).css("display","none");
				
				for (i = 0; i < custom;i++){
					var selecter = $(Selectclass).eq(i);
					var optionLength = $(Selectclass).eq(i).children("option").length;
					var firstVal = $(Selectclass).eq(i).children("option:first-child").text();
					
					
					var customDrop = "<div class='custom-dropdown'>" + 
					"<button class='drop-btn' type='button'><span class='selectedValue'> "+ firstVal + "</span><span class='caret'></span></button>" +
					" <ul class='customDrop'></ul>" +
					"</div>"; 
					
					$(Selectclass).eq(i).parent().prepend(customDrop);
					
					for(o = 0; o < optionLength; o++) {
						var child = o + 1;
						var option =  $(Selectclass).eq(i).children("option:nth-child("+ child +")").text();
						var optionVal = $(Selectclass).eq(i).children("option:nth-child("+ child +")").val();
						
						$(".customDrop").eq(i).append("<li title="+optionVal+">"+ option + "</li>");
						
						$(".customDrop li:first-child").addClass("selected");
					}
				}

				$(document).click( function(){
					$('.customDrop').fadeOut();
				});
				
				$(".drop-btn").on("click",function(e){
					e.stopPropagation();
					if ($(this).hasClass("active")){
						$(this).removeClass("active").next().slideUp(200);
					}
					else {
						

						//$slectedoption = $(this).next().children("li.selected").index();
						//$dropTopPos = '-' + $optionheight * $slectedoption + 'px';
						//$(this).next('ul').css('top',$dropTopPos); 

						$(".drop-btn.active").removeClass("active").next().slideUp(200);
						$(this).addClass("active").next().slideDown(200);

					}
					// var clickoffset = $(this).offset().top;
				});

				$(".customDrop li").on("click",function(){
					var slectedValue = $(this).text();
					var slectedtitle = $(this).attr("title");

					
					$(this).parent("ul").children('li.selected').removeClass("selected");
					$(this).addClass("selected").parent("ul").slideUp(200);
					
					$(this).parents().children("button").attr("title", slectedtitle).removeClass("active").children(".selectedValue").text(slectedValue);

					//$slectedoption = $(this).parents().children("li.selected").index();
					//$optionheight = $(this).outerHeight();
					//$dropTopPos = '-' + $optionheight * $slectedoption + 'px';
					


					
					
				});
				
			}
		

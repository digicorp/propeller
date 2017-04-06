/*!
 * Propeller v1.1.0 (http://propeller.in)
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

// Propeller form ------------------------------------------------------//
$( document ).ready(function() {
	// paper input
	$(".pmd-textfield-focused").remove();
	$(".pmd-textfield .form-control").after('<span class="pmd-textfield-focused"></span>');
	// floating label
	$('.pmd-textfield input.form-control').each(function () {
		if($(this).val() !== ""){
			$(this).closest('.pmd-textfield').addClass("pmd-textfield-floating-label-completed");
	  	}
	});
	// floating change label
	$(".pmd-textfield input.form-control").on('change', function() {
        if($(this).val() !== ""){
            $(this).closest('.pmd-textfield').addClass("pmd-textfield-floating-label-completed");
        }
    });
	// floating label animation
	$("body").on("focus",".pmd-textfield .form-control",function(){
    	$(this).closest('.pmd-textfield').addClass("pmd-textfield-floating-label-active pmd-textfield-floating-label-completed");
    });
	// remove floating label animation
	$("body").on("focusout",".pmd-textfield .form-control",function(){
    	if($(this).val() === ""){
        	$(this).closest('.pmd-textfield').removeClass("pmd-textfield-floating-label-completed");
      	}
		$(this).closest('.pmd-textfield').removeClass("pmd-textfield-floating-label-active");
    });
});
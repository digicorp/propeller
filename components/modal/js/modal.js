/*!
 * Propeller v1.0.0 (http://propeller.in)
 * Copyright 2016-2017 Digicorp, Inc.
 * Licensed under MIT (http://propeller.in/LICENSE)
 */

// Modal -----------------------------------------------------------------//
// Reposition when a modal is shown
function reposition() {
	var modal = $(this),
		dialog = modal.find('.modal-dialog');
		modal.css('display', 'block');
		dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
		$(".modal .actions").css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
}
$('.modal').on('show.bs.modal', reposition);
$(window).on('resize', function() {
	$('.modal:visible').each(reposition);
});
$(document).ready(function(){
    $('#standalone-list-dialog').on('hide.bs.modal', function (e) {
        resetFormValidation('#component_form');
    });
    $('.component_from_btn').click(function(){
        if($('.stand_alone_check_box:checked').length  == 0){
            return false;
        }
        $('#component_form').submit();
    });
});

function resetFormValidation(element)
{
    $.each($(element), function(index) {
    	$(this)[0].reset();
    });
    $(element).find('input, textarea').focusout();
    $(element).validate().resetForm();
    $(element).find('div').removeClass('has-error');
}
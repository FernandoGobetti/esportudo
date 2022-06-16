jQuery(function () {
    jQuery("#esportudo_submit").on('click', function (e) {

        var repo = jQuery('#esportudo_org').val();

        jQuery.ajax({
            type:'POST',
            url:esp_obj.ajax_url,
            data:{action:'esp_gitapi', repo:repo},
            success:function (data) {
                jQuery('#esportudo_retorno').html(data);
            }
        });
    });
});
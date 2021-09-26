$(document).ready(function(){

    $('#sameaddress').bind('change', function () {

        if($('#sameaddress').prop('checked')) {

            $('#shipping-address').val($('#billing-address').val());
            $('#shipping-address2').val($('#billing-address2').val());
            $('#shipping-city').val($('#billing-city').val());
            $('#shipping-state').val($('#billing-state').val());
            $('#shipping-zip').val($('#billing-zip').val());
            $('#shipping-country').val($('#billing-country').val());

        } else {

            $("#shipping-address").val('');
            $('#shipping-address2').val('');
            $('#shipping-city').val('');
            $('#shipping-state').val('');
            $('#shipping-zip').val('');
            $('#shipping-country').val('');

        }

    });

});

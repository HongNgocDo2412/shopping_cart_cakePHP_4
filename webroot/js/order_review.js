$(document).ready(function(){

    cardtype($('#creditcard-number').val());

    $('#creditcard-number').keyup(function() {
        cardtype($('#creditcard-number').val());
    });

    $('#payment-method').change(function(){
        if($('#payment-method').val() == 'credit_card') {
            $('#paymentblock').show();
            // $( "#creditcard-number" ).rules( "add", {
            //     required: true,
            //     digits: true,
            //     minlength: 15,
            //     maxlength: 16,
            //     creditcard: true,
            //     messages: {
            //         required: "Enter Credit Card Number",
            //         digits: "Numeric Only",
            //         minlength: $.validator.format("Enter at least {0} digits"),
            //         maxlength: $.validator.format("Enter maximum {0} digits"),
            //         creditcard: "Enter Valid Credit Card Number"
            //     }
            // });
            // $( "#creditcard-code" ).rules( "add", {
            //     required: true,
            //     digits: true,
            //     minlength: 3,
            //     maxlength: 4,
            //     messages: {
            //         required: "Enter CVC Code",
            //         digits: "Numeric Only",
            //         minlength: $.validator.format("Enter at least {0} digits"),
            //         maxlength: $.validator.format("Enter maximum {0} digits")
            //     }
            // });
        } else {
            $('#creditcard-number').val('');
            $('#creditcard-code').val('');
            $('#creditcard-month').val('');
            $('#creditcard-year').val('');
            $("#OrderReviewForm").data('validator').resetForm();
            // $("#creditcard-number").rules("remove");
            // $("#creditcard-code").rules("remove");
            $('#paymentblock').hide();
        }
    });

    $("#OrderReviewForm").validate({
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        errorClass: 'error',
        rules: {
            "creditcard_number": {
                required: true,
                digits: true,
                minlength: 15,
                maxlength: 16,
                creditcard: true
            },
            "creditcard_code": {
                required: true,
                digits: true,
                minlength: 3,
                maxlength: 4
            },
            "creditcard_month": {
                required: true
            },
            "creditcard_year": {
                required: true
            }
        },
        messages: {
            "creditcard_number": {
                required: "Enter Credit Card Number",
                digits: "Numeric Only",
                minlength: $.validator.format("Enter at least {0} digits"),
                maxlength: $.validator.format("Enter maximum {0} digits"),
                creditcard: "Enter Valid Credit Card Number"
            },
            "creditcard_code": {
                required: "Enter CVC Code",
                digits: "Numeric Only",
                minlength: $.validator.format("Enter at least {0} digits"),
                maxlength: $.validator.format("Enter maximum {0} digits")
            },
            "creditcard_month": {
                required: "Select Expiration Month"
            },
            "creditcard_year": {
                required: "Select Expiration Year"
            }
        }
    });

    $("#cscpop").popover({
        container: 'body',
        html: true,
        trigger: 'hover'
    });

});


function cardtype(num) {

    if(num.length == 1) {

        if(num == 4){
            $('#creditcard-number').attr('style', 'background: #FFFFFF url("/img/cards/4.png") no-repeat right 5px center !important');
        }
        else if(num == 5){
            $('#creditcard-number').attr('style', 'background: #FFFFFF url("/img/cards/5.png") no-repeat right 5px center !important');
        }
        else if(num == 3){
            $('#creditcard-number').attr('style', 'background: #FFFFFF url("/img/cards/3.png") no-repeat right 5px center !important');
        }
        else if(num == 6){
            $('#creditcard-number').attr('style', 'background: #FFFFFF url("/img/cards/6.png") no-repeat right 5px center !important');
        }

    } else if(num.length < 1){
        $('#creditcard-number').attr('style', 'background: #FFFFFF url("/img/cards/cards.png") no-repeat right 5px center !important');
    }

    return true;

}
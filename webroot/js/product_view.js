$( document ).ready(function(){

    var keywords = '';

    function matchStart (term, text, option) {

        if ($.trim(term) === '') {
            return true;
        }
        keywords = (term).split(" ");

        for (var i = 0; i < keywords.length; i++) {

            if ((text.toUpperCase()).indexOf((keywords[i]).toUpperCase()) == -1 )
            {
                return false;
            }
        }
        return true;
    }

    $.fn.select2.amd.require(['select2/compat/matcher'], function (oldMatcher) {
        $("#productoptionlist").select2({
            placeholder: 'Select an option',
            theme: "bootstrap",
            matcher: oldMatcher(matchStart)
        })
    });

    function select2_search ($el, term) {
        $el.select2('open');
        var $search = $el.data('select2').dropdown.$search || $el.data('select2').selection.$search;
        $search.val(term);
        $search.trigger('keyup');
    }

    var buttonkeywordsshorts = '';
    var buttonkeywordsweights = '';

    $('.shorts:button').on('click', function () {
        buttonkeywordsshorts = ' ';
        if($(this).hasClass('active')) {
            $(this).removeClass("active btn-success");
            var value = buttonkeywordsweights;
        } else {
            $(".shorts").removeClass("active btn-success");
            $(this).addClass("active btn-success");
            var value = buttonkeywordsweights + ' ' + $(this).attr("value") + ' ';
            buttonkeywordsshorts = $(this).attr("value");
        }
        select2_search($("#productoptionlist"), value);
    });

    $('.weights:button').on('click', function () {
        buttonkeywordsweights = ' ';
        if($(this).hasClass('active')) {
            $(this).removeClass("active btn-success");
            var value = buttonkeywordsshorts;
        } else {
            $(".weights").removeClass("active btn-success");
            $(this).addClass("active btn-success");
            var value = $(this).attr("value") + ' ' + buttonkeywordsshorts + ' ';
            buttonkeywordsweights = $(this).attr("value");
        }
        select2_search($("#productoptionlist"), value);
    });

    $("#price").hide();
    $("#pricecurrency").hide();

    var origprice = $("#product_price").val();

    $("#addtocart").attr("disabled", "disabled");

    $('#productoptionlist').change(function() {

        if ($('#productoptionlist').val() == 0) {
            $("#addtocart").attr({ disabled: true });
            $("#price").html(0);
            $("#price").hide();
        } else {
            $("#addtocart").attr({ disabled: false });
            var str = $("#productoptionlist option:selected").text();
            var rest = str.substring(0, str.lastIndexOf("$"));
            var price = str.substring(str.lastIndexOf("$"), str.length);
            $("#price").html(price);
            $("#price").show();
        }
    });

});
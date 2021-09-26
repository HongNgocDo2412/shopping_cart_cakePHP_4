$(document).ready(function(){

    $('.numeric').on('keypress', function(event) {
        if (event.keyCode == 13) {
            return true;
        }
        return (/\d/.test(String.fromCharCode(event.keyCode)));
    });

    $('.numeric').on('keyup mouseup change click', function(event) {

        var quantity = Math.round($(this).val());

        if ((event.keyCode == 38 || event.keyCode == 40 || event.keyCode == 46 || event.keyCode == 8) && quantity > 0) {
        } else {
            if(/\d/.test(String.fromCharCode(event.keyCode)) === false) {
                return false;
            }
        }

        ajaxcart($(this).attr("data-id"), quantity, $(this).attr("data-mods"));

    });

    $(".remove").each(function() {
        $(this).replaceWith('<a class="remove" id="' + $(this).attr('id') + '" href="' + Shop.basePath + 'shop/remove/' + $(this).attr('id') + '" title="Remove item"><img src="' + Shop.basePath + 'img/icon-remove.gif" alt="Remove" /></a>');
    });

    $(".remove").click(function() {
        ajaxcart($(this).attr("id"), 0);
        return false;
    });

    function ajaxcart(id, quantity, mods) {

        $.ajax({
            type: "POST",
            url: "/products/itemupdate",
            data: {
                id: id,
                mods: mods,
                quantity: quantity
            },
            dataType: "json",
            success: function(data) {
                $.each(data.Orderproducts, function(key, value) {
                    if($('#subtotal-' + key).html() != "$" + value.subtotal) {
                        $('#quantity-' + key).val(value.quantity);
                        $('#subtotal-' + key).html("$" + value.subtotal).animate({ backgroundColor: "#ff8" }, 100).animate({ backgroundColor: 'transparent'}, 500);
                    }
                    // console.log(key);
                    // console.log(value);
                });
                $('#subtotal').html('$' + data.Order.total).animate({ backgroundColor: "#ff8" }, 100).animate({ backgroundColor: 'transparent'}, 500);
                $('#quantitybutton').html(data.Order.quantity);
                if(data.Order.total === 0) {
                    window.location.replace("/products/clear");
                }
            },
            error: function() {
                window.location.replace("/products/clear");
            }
        });
    }

});

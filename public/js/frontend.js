


$(document).ready(function () {

    //OWL CAROUSEL
    $('.popular-carousel').owlCarousel({
        loop:true,
        margin:1,
        //responsiveClass:true,
        nav:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
            0:{
                items:5,
                nav:true
            },
            600:{
                items:7,
                nav:true
            },
            1000:{
                items:9,
                nav:true,
                loop:false
            }
    });

    //SHOW PRODUCTS
    $('.increment').click(function (e) {
        e.preventDefault();
        var value = parseInt($('.quantity').val());
        value = isNaN(value) ? '0' : value;
        var stock = parseInt($('.stock-value').val());
        if(value < stock){
            value++;
            $(".quantity").val(value);
        } else {
            Swal.fire({
                text: 'Csak a készlet erejéig tud terméket helyezni a kosárba!',
                confirmButtonText: 'OK'
            })
        }
    });


    $('.decrement').click(function (e) {
        e.preventDefault();
        var value = parseInt($('.quantity').val());
        value = isNaN(value) ? '0' : value;
        if (value > 1){
            value--;
            $(".quantity").val(value);
        }
    });


    $('.addToCart').click(function (e) {
        e.preventDefault();
        var category_id = $(this).closest('.productData').find('.categoryId').val();
        var product_id = $(this).closest('.productData').find('.productId').val();
        var product_quantity = $(this).closest('.productData').find('.quantity').val();

        $.ajax({
            method: "POST",
            url: "/add_to_cart",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'category_id': category_id,
                'product_id': product_id,
                'product_quantity': product_quantity,
            },
            success: function (response) {
                Swal.fire({
                icon: response.icon,
                text: response.status,
                confirmButtonText: 'OK'
                });
            }
        });
    });

    $('.addToCart2').click(function (e) {
        e.preventDefault();
        var category_id = parseInt($(this).closest('.productData2').find('.categoryId2').val());
        var product_id = parseInt($(this).closest('.productData2').find('.productId2').val());
        var product_quantity = 1;
        
        $.ajax({
            method: "POST",
            url: "/add_to_cart",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'category_id': category_id,
                'product_id': product_id,
                'product_quantity': product_quantity,
            },
            success: function (response) {
                Swal.fire({
                icon: response.icon,
                text: response.status,
                confirmButtonText: 'OK'
                });
            }
        });
    });


    //CART
    $('.delete-cart-item').click( function (event){
        event.preventDefault();

        var product_id = parseInt($(this).closest('.productData').find('.product_id').val());
        var category_id = $(this).closest('.productData').find('.categoryId').val();

        $.ajax({
            method: "POST",
            url: "delete-cart-item",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'category_id': category_id,
                'product_id': product_id,
            },
            success: function (response) {
                Swal.fire({
                    icon: response.icon,
                    text: response.status,
                    confirmButtonText: 'OK'
                }).then(function() {
                    window.location.reload();
                });
            }
        });
    });

    $('.quantity-mod').click(function (event) {
        var product_id = parseInt($(this).closest('.productData').find('.product_id').val());
        var quantity = parseInt($(this).closest('.productData').find('.quantity').val());

        $.ajax({
            method: "POST",
            url: "update-cart-item",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'product_id': product_id,
                'product_quantity': quantity
            },
            success: function (response) {
                window.location.reload();
            }
        });
    });

});
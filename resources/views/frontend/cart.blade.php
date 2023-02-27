@extends('layouts.frontend')

@section('content')
    <div class="container py-5">
        <div class="card shadow">
            <div class="card-body">
                @foreach ($cartItems as $item)
                    <div class="row productData">
                        <div class="col-md-2">
                            <img class="w-100" src="{{ asset('img/uploads/products/A'.$item->products->image) }}" alt="termékkép">
                        </div>
                        <div class="col-md-5 d-flex align-items-center">
                            <h6 class="">{{ $item->products->model }}</h6>
                        </div>
                        <div class="col-md-3">
                            <input type="hidden" class="product_id" value="{{ $item->product_id }}">
                            <label for="quantity">Mennyiség</label>
                            <div class="input-group text-center mb-3">
                                <button class="input-group-text decrement">-</button>
                                <input class="form-control quantity text-center" type="text" name="quantity" value="{{ $item->product_quantity}}">
                                <button class="input-group-text increment">-</button>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-center mt-2">
                            <button class="btn btn-danger delete-cart-item"><i class="fa fa-trash"></i> Törlés</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.increment').click(function (event) {
                event.preventDefault();
                //var value = parseInt($('.quantity').val());
                var value = parseInt($(this).closest('.productData').find('.quantity').val());
                value = isNaN(value) ? '0' : value;
                if(value < 10){
                    value++;
                    //$(".quantity").val(value);
                    $(this).closest('.productData').find('.quantity').val(value);
                }
            });

            $('.decrement').click(function (event) {
                event.preventDefault();
                //var value = parseInt($('.quantity').val());
                var value = parseInt($(this).closest('.productData').find('.quantity').val());
                value = isNaN(value) ? '0' : value;
                if (value > 1){
                    value--;
                    //$(".quantity").val(value);
                    $(this).closest('.productData').find('.quantity').val(value);
                }
            });

            var stock = parseInt($('.stock').text());
            if (stock < 1){
                $('.stock-color').css({color: 'red'});
            } else {
                $('.stock-color').css({color: 'green'});
            }



            $('.addToCart').click(function (event) {
                event.preventDefault();

                var category_id = $(this).closest('.productData').find('.categoryId').val();
                var product_id = $(this).closest('.productData').find('.productId').val();
                var product_quantity = $(this).closest('.productData').find('.quantity').val();

                /* $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                }); */

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
                        alert(response.status);
                    }
                });
            });

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
                        window.location.reload();
                        swal("", response.status, "success");
                        alert(response.status, "success");
                    }
                });
            });

        });
    </script>
@endsection
@extends('layouts.frontend')

@section('content')
    <div class="container py-5">
        <div class="card shadow">
            <div class="card-body">
                @php
                    $carts = DB::table('carts')->get();
                @endphp
                @if ($carts->isEmpty())
                    <h5 class="text-center">A kosár üres.</h5>
                @endif
                @foreach ($cartItems as $item)
                    <div class="row productData">
                        <div class="col-md-2">
                            <img class="w-100" src="{{ asset('img/uploads/products/A'.$item->products->image) }}" alt="termékkép">
                        </div>
                        <div class="col-md-5 d-flex align-items-center">
                            <h6 class="">{{ $item->products->model }}</h6>
                        </div>
                        <div class="col-md-3 mt-3 d-flex align-items-center">
                            <input type="hidden" class="product_id" value="{{ $item->product_id }}">
                            <input type="hidden" class="stock-value" value="{{ $item->products->stock }}">
                            {{-- <label for="quantity">Mennyiség</label> --}}
                            <div class="input-group text-center mb-3 d-flex justify-content-end">
                                <button class="input-group-text decrement">-</button>
                                <input class="form-control quantity text-center" type="text" name="quantity" value="{{ $item->product_quantity}}">
                                <button class="input-group-text increment">+</button>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-center mt-1">
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
                var value = parseInt($(this).closest('.productData').find('.quantity').val());
                value = isNaN(value) ? '0' : value;
                var stock = parseInt($('.stock-value').val());
                if(value < stock){
                    value++;
                    $(this).closest('.productData').find('.quantity').val(value);
                } else {
                    Swal.fire({
                        text: 'Csak a készlet erejéig tud terméket helyezni a kosárba!',
                        confirmButtonText: 'OK'
                    });
                }
            });

            $('.decrement').click(function (event) {
                event.preventDefault();
                var value = parseInt($(this).closest('.productData').find('.quantity').val());
                value = isNaN(value) ? '0' : value;
                if (value > 1){
                    value--;
                    $(this).closest('.productData').find('.quantity').val(value);
                }
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
                        Swal.fire({
                            icon: "success",
                            text: response.status,
                            confirmButtonText: 'OK'
                        }).then(function() {
                            window.location.reload();
                        });
                    }
                });
            });

        });
    </script>
@endsection
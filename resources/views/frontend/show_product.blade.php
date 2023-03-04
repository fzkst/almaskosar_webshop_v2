@extends('layouts.frontend')

@section('content')
    <div class="py-3 mb-4 shadow-sm border-top">
        <div class="container">
            <h6 class="mb-0"><a href="{{ url('/') }}">Almáskosár /</a>
                @php
                    $kategoria_neve = DB::table('categories')->where('id', $product->category_id)->get('name');
                @endphp
                <a href="{{ url('/frontend/'.$kategoria_neve[0]->name)}}">{{ $kategoria_neve[0]->name;}}</a>
                / {{ $product->model }}
            </h6>
        </div>
    </div>
    <div class="container py-5 products">
        <div class="card mx-auto shadow productData" style="max-width: 40rem">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="2000">
                    <img src="{{ asset('img/uploads/products/'.'A'.$product->image) }}" alt="{{ $product->image }}" class="d-block w-100" alt="{{$product->model}}">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('img/uploads/products/'.'B'.$product->image) }}" alt="{{ $product->image }}" class="d-block w-100" alt="{{$product->model}}">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('img/uploads/products/'.'C'.$product->image) }}" alt="{{ $product->image }}" class="d-block w-100" alt="{{$product->model}}">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <div class="card-body">
                <h5>{{ $product->model }}</h5>
                <div class="card-text">
                    <li>{{ $product->color }}</li>
                    <li>{{ $product->storage }} GB</li>
                </div>
                @php
                    $formated_price = number_format($product->price, 0, '.', '.');
                @endphp
                <div class="mt-2">
                    <span class="me-2 stock-color">Raktáron</span><span class="stock stock-color">{{ $product->stock }}</span>
                    <span class="float-end">{{ $formated_price }}.-</span class="float-end">
                </div>
            </div>
            <div class="card-footer">
                <div class="row ">
                    <div class="col-3">
                        <input class="productId" type="hidden" value="{{ $product->id }}">
                        <input class="categoryId" type="hidden" value="{{ $product->category_id }}">
                        <div class="input-group text-center">
                            <button class="input-group-text decrement">-</button>
                            <input class="form-control text-center quantity" type="text" name="quantity" value="1" size="10">
                            <button class="input-group-text increment">+</button>
                        </div>
                    </div>
                    <div class="col-9 d-flex justify-content-end">
                        <button class="btn btn-outline-secondary text-end addToCart">Kosárba <i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.increment').click(function (e) {
                e.preventDefault();
                var value = parseInt($('.quantity').val());
                value = isNaN(value) ? '0' : value;
                if(value < 10){
                    value++;
                    $(".quantity").val(value);
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

            var stock = parseInt($('.stock').text());
            if (stock < 1){
                $('.stock-color').css({color: 'red'});
            } else {
                $('.stock-color').css({color: 'green'});
            }



            $('.addToCart').click(function (e) {
                e.preventDefault();

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

        });
    </script>
@endsection
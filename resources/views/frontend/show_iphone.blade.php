@extends('layouts.frontend')

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0"><a href="{{ url('/') }}">Collections /</a>
                @php
                    $kategoria_neve = DB::table('categories')->where('id', $iphone->category_id)->get('name');
                @endphp
                <a href="{{ url('/frontend/'.$kategoria_neve[0]->name)}}">{{ $kategoria_neve[0]->name;}}</a>
                / {{ $iphone->model }}
            </h6>
        </div>
    </div>
    <div class="container py-5 iphones">
        <div class="card mx-auto shadow" style="max-width: 40rem">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="2000">
                    <img src="{{ asset('img/uploads/iphones/' . $iphone->image) }}" alt="{{ $iphone->image }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('img/uploads/iphones/'.'B'.$iphone->image) }}" alt="{{ $iphone->image }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('img/uploads/iphones/'.'C'.$iphone->image) }}" alt="{{ $iphone->image }}" class="d-block w-100" alt="...">
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
                <h5>{{ $iphone->model }}</h5>
                <div class="card-text">
                    <li>{{ $iphone->color }}</li>
                    <li>{{ $iphone->storage }} GB</li>
                </div>
                @php
                    $formated_price = number_format($iphone->price, 0, '.', '.');
                @endphp
                <span class="float-end">{{ $formated_price }}.-</span class="float-end">
            </div>
            <div class="card-footer">
                <div class="row w-25">
                    <div class="col">
                        <span class="me-2 stock-color">Raktáron</span><span class="stock stock-color">{{ $iphone->stock }}</span>
                        <label for="quantity">Mennyiség</label>
                        <div class="input-group text-center mb-3">
                            <button class="input-group-text decrement">-</button>
                            <input class="form-control text-center quantity" type="text" name="quantity" value="1" size="10">
                            <button class="input-group-text increment">+</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a class="col" href="{{ url('/frontend/show_iphone/' . $iphone->id) }}">Részletek</a>
                    <a class="float-end text-end col" href="">Kosárba <i class="fa fa-shopping-cart"></i></a>
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
        });
    </script>
@endsection
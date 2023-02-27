@extends('layouts.frontend')

@section('content')
    @include('frontend.components.categories_cards')
    <h2 class="pt-5 text-center">Kiemelt termékek</h2>
    <div class="py-5 owlcarousel">
        <div class="container">
            <div class="row">
                <div class="owl-carousel popular-carousel owl-theme">
                    @foreach ($popular_products as $product)
                        <div class="">
                            <div class="card">
                                <a href="{{ url('/frontend/show_iphone/'.$product->id) }}">
                                    <img src="{{ asset('img/uploads/products/'.Arr::random($letters).$product->image) }}" alt="{{ $product->image }}"></a>
                                <div class="card-body">
                                    <h5 class="fw-bold">{{ $product->model }}</h5>
                                    <div class="card-text fs-6">
                                        <li>{{ $product->color }}</li>
                                        <li>{{ $product->storage }} GB</li>
                                        <a class="mt-5" href="{{ url('/frontend/show_iphone/' . $product->id) }}">Részletek</a>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="col">
                                        <span class="float-start stock-color">
                                            @if ($product->stock > 0)
                                                Készleten
                                            @else
                                                Nincs raktáron
                                            @endif
                                        </span>
                                        <input class="stock" type="hidden" value="{{ $product->stock }}">
                                    </div>
                                    <div class="col">
                                        @php
                                            $formated_price = number_format($product->price, 0, '.', '.');
                                        @endphp
                                        <span class="float-end fw-bold">{{ $formated_price }}.-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.popular-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            nav:true,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:true
                },
                1000:{
                    items:5,
                    nav:true,
                    loop:false
                }
        });

        var stock = parseInt($('.stock').text());
            if (stock < 1){
                $('.stock-color').css({color: 'red'});
            } else {
                $('.stock-color').css({color: 'green'});
            }
    </script>
@endsection

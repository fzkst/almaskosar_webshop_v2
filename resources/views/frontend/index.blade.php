@extends('layouts.frontend')

@section('content')
    @include('frontend.components.categories_cards')
    <h2 class="pt-5 text-center">Kiemelt termékek</h2>
    <div class="py-5 owlcarousel">
        <div class="container">
            <div class="row">
                <div class="owl-carousel popular-carousel owl-theme">
                    @foreach ($popular_products as $item)
                        <div class="">
                            <div class="card">
                                @if ($item->category_id === 1)
                                    <img src="{{ asset('img/uploads/iphones/'.$item->image) }}" alt="{{ $item->image }}">
                                @else
                                    <img src="{{ asset('img/uploads/ipads/'.$item->image) }}" alt="{{ $item->image }}">
                                @endif
                                <div class="card-body">
                                    <h5>{{ $item->model }}</h5>
                                    <div class="card-text">
                                        <li>{{ $item->color }}</li>
                                        <li>{{ $item->storage }} GB</li>
                   
                                    </div>
                                    @php
                                        $formated_price = number_format($item->price, 0, '.', '.');
                                    @endphp
                                    <span class="float-end">{{ $formated_price }}.-</span class="float-end">
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
        })
    </script>
@endsection

@extends('layouts.frontend')

@section('content')
    <div class="py-3 mb-1 shadow-sm linkline border-top">
        <div class="container">
            <h6 class="mb-0 h6-bold"><a href="{{ url('/') }}">Almáskosár</a></h6>
        </div>
    </div>
    @include('frontend.components.categories_cards')
    <h2 class="pt-3 text-center">Kiemelt termékek</h2>
    <div class="py-5 owlcarousel">
        <div class="container">
            <div class="row">
                <div class="owl-carousel popular-carousel owl-theme">
                    @foreach ($popular_products as $product)
                        <div class="card" style="max-width: 18rem">
                            @if ($product->category_id == 3)
                                <a href="{{ url('/frontend/show_product/' . $product->id) }}">
                                    <img class="card-img img-rounded p-2"
                                        src="{{ asset('img/uploads/products/' . Arr::random($letters) . $product->image) }}"
                                        alt="{{ $product->image }}"></a>
                            @else
                                <a href="{{ url('/frontend/show_product/' . $product->id) }}">
                                    <img class="card-img img-rounded"
                                        src="{{ asset('img/uploads/products/' . Arr::random($letters) . $product->image) }}"
                                        alt="{{ $product->image }}"></a>
                            @endif
                            <div class="card-body carousel-body">
                                <span class="fw-bold">{{ $product->model }}</span>
                                <div class="card-text fs-6">
                                    <li>{{ $product->color }}</li>
                                    <li>{{ $product->storage }} GB</li>
                                    {{--   <a class="mt-5 float-end" href="{{ url('/frontend/show_product/' . $product->id) }}">Részletek</a> --}}
                                    <div class="mt-3 {{ $product->stock < 1 ? 'text-danger' : 'text-success' }}">
                                        <span class="">
                                            @if ($product->stock > 0)
                                                Raktáron: {{ $product->stock }}
                                            @else
                                                Nincs raktáron
                                            @endif
                                            <input class="stock" type="hidden" value="{{ $product->stock }}">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row mt-1">
                                    <a class="col fw-bold text-primary" href="{{ url('/frontend/show_product/' . $product->id) }}">Részletek</a>
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

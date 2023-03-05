@extends('layouts.frontend')

@section('content')
    <div class="py-3 mb-4 shadow-sm linkline border-top">
        <div class="container">
            <h6 class="mb-0"><a href="{{ url('/') }}"><span class=" h6-bold">Almáskosár /</span></a>
                <span>{{ $categories[$products[0]->category_id - 1]->name }}</span>
            </h6>
        </div>
    </div>
    <div class="container row mx-auto">
        <div class="card">
            <h3>Szűrés</h3>
        </div>
    </div>
    <h2 class="container py-5">Készülékek</h2>
    <div class="container py-2 iphones">
        <div class="row g-5">
            @foreach ($products as $product)
                <div class="card col-md-4 mx-auto shadow kiskartya" style="max-width: 18rem">
                    <img class="img-rounded" src="{{ asset('img/uploads/products/'.Arr::random($letters).$product->image) }}" alt="{{ $product->image }}">
                    <div class="card-body">
                        <p>{{ $product->model }}</p>
                        <div class="card-text">
                            <li>{{ $product->color }}</li>
                            <li>{{ $product->storage }} GB</li>

                        </div>
                        @php
                            $formated_price = number_format($product->price, 0, '.', '.');
                        @endphp
                        <span class="float-end">{{ $formated_price }}.-</span class="float-end">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <a class="col" href="{{ url('/frontend/show_product/' . $product->id) }}">Részletek</a>
                            <a class="float-end col" href="">Kosárba <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

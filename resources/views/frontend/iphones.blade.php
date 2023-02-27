@extends('layouts.frontend')

@section('content')
    <div class="py-3 mb-4 shadow-sm linkline border-top">
        <div class="container">
            <h6 class="mb-0"><a href="{{ url('/') }}">Almáskosár /</a>
                @php
                    $kategoria_neve = DB::table('categories')->get('name');
                @endphp
                <a href="{{ url('/frontend/iphones')}}"> iphones</a>
            </h6>
        </div>
    </div>
    <div class="container row mx-auto">
        <div class="card">
            <h3>Szűrés</h3>
        </div>
    </div>
    <h2 class="container py-5">iPhone készülékek</h2>
    <div class="container py-2 iphones">
        <div class="row g-5">
            @foreach ($iphones as $iphone)
                <div class="card col-md-4 mx-auto shadow" style="max-width: 18rem">
                    <img src="{{ asset('img/uploads/products/'.Arr::random($letters).$iphone->image) }}" alt="{{ $iphone->image }}">
                    <div class="card-body">
                        <h5>{{ $iphone->model }}</h5>
                        <div class="card-text">
                            <li>{{ $iphone->color }}</li>
                            <li>{{ $iphone->storage }} GB</li>
                            <li>{{ $iphone->image }}</li>
                        </div>
                        @php
                            $formated_price = number_format($iphone->price, 0, '.', '.');
                        @endphp
                        <span class="float-end">{{ $formated_price }}.-</span class="float-end">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <a class="col" href="{{ url('/frontend/show_iphone/' . $iphone->id) }}">Részletek</a>
                            <a class="float-end col" href="">Kosárba <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


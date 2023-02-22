@extends('layouts.frontend')

@section('content')
    <h2 class="container py-5">iPhone készülékek</h2>
    <div class="container py-2 iphones">
        <div class="row g-5">
            @foreach ($iphones as $iphone)
                <div class="card col-md-4 mx-auto shadow" style="max-width: 25rem">
                    <img src="{{ asset('img/uploads/iphones/' . $iphone->image) }}" alt="{{ $iphone->image }}">
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
                        <div class="row">

                            <div class="col">
                                <label for="quantity">Mennyiség</label>
                                <div class="input-group text-center mb-3 w-50">
                                    <span class="input-group-text">-</span>
                                    <input class="form-control" type="text" name="quantity" value="1">
                                    <span class="input-group-text">+</span>
                                </div>
                            </div>

                        </div>
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

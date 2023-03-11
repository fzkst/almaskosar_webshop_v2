@extends('layouts.frontend')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-title row mt-3 w-100">
                        <div class="col ms-3">
                            <h4>{{ $order->tracking_number }} számú rendelés:</h4>
                        </div>
                        <div class="col-1 me-3">
                            <button class="col btn btn-primary">vissza</button>
                        </div>
                    </div>
                    <hr class="w-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h6>Számlázási adatok:</h6>
                                <hr style="max-width: 150px">
                                <table class="show-order">
                                    <tr>
                                        <td>Vezetéknév:</td>
                                        <td>{{ $order->last_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Keresztnév:</td>
                                        <td>{{ $order->first_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td>{{ $order->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Telefonszám:</td>
                                        <td>{{ $order->phone_number }}</td>
                                    </tr>
                                    <tr>
                                        <td>Cím:</td>
                                        <td>{{ $order->postal_code }}. {{ $order->city }}, {{ $order->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Vevőkód:</td>
                                        <td>{{ $order->customer_code }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Modell</th>
                                            <th class="text-center">db</th>
                                            <th class="text-end pe-4">ár</th>
                                            <th class="text-center">kép</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order->orderItems as $item)
                                            <tr class="align-middle">
                                                <td>{{ $item->products->model }}</td>
                                                <td class="text-center">{{ $item->product_quantity }}</td>
                                                <td class="text-end">{{ number_format($item->price, 0, '.', '.') }}.-</td>
                                                <td class="text-center"><img src="{{ asset('img/uploads/products/A'.$item->products->image) }}" width="50px" alt="termékkép"></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h5 class="text-end mt-5">Összesen: {{ number_format($order->total_price, 0, '.', '.') }}.- </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

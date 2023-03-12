@extends('admin.admin')

@section('content')
    <div class="container py-5">
        <div class="card">
            <div class="card-title">
                <h5 class="pt-3 ms-3">Az {{$order->tracking_number}} rendelés szerkesztése</h5>
            </div>
            <hr>
            <form action="{{ url('update_order/'.$order->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row card-body" id="kategoria_urlap">
                    <div class="col">
                        <h6 class="mb-4 text-decoration-underline">Vásárló adatai</h6>
                        <div>
                            <div class="mb-4">
                                <label class="form-label" for="">Vezetéknév</label>
                                <input type="text" value="{{ $order->last_name }}" class="form-control" name="last_name">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="">Keresztnév</label>
                                <input type="text" value="{{ $order->first_name }}" class="form-control" name="first_name">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="">Email</label>
                                <input type="text" value="{{ $order->email }}" class="form-control" name="email">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="">Irányítószám</label>
                                <input type="text" value="{{ $order->postal_code }}" class="form-control" name="postal_code">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="">Város</label>
                                <input type="text" value="{{ $order->city }}" class="form-control" name="city">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="">Cím</label>
                                <input type="text" value="{{ $order->address }}" class="form-control" name="address">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="">Telefonszám</label>
                                <input type="text" value="{{ $order->phone_number }}" class="form-control" name="phone_number">
                            </div>
                            <div class="mb-4 d-flex flex-row">
                                <h6 class="h6 " for="">Vevőkód: </h6><h6 class="ms-2">{{ $order->customer_code }}</h6>
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-outline-secondary mt-2" id="btn_hozzaad">Módosít</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="mb-3 text-decoration-underline">Megrendelt termékek</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Modell</td>
                                    <td class="text-center">db</td>
                                    <td class="text-end pe-4">ár</td>
                                    <td class="text-center">kép</td>
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
                        <h6 class="mt-5 text-decoration-underline">Rendelés állapota</h6>
                            <div class="mt-3">
                                @if ($order->status == 0)
                                    <input type="checkbox" class="form-check-control" name="status" value="{{ $order->status }}">
                                @endif
                                <label class="form-check-label ms-2" for="status" >Teljesítve</label>
                            </div>
                        <div class="mt-3">
                            <label class="form-label" for="">Rendeléssel kapcsolatos üzenet a vásárlónak</label>
                            <textarea class="form-control" name="first_name" rows="5" value="{{ $order->message }}"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

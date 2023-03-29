@extends('layouts.frontend')

@section('content')
    <div class="container py-4">
        <form action="{{ url('user_order') }}" method="post" class="checkout-form">
            @csrf
            <div class="row">
                <div class="col-7 mx-auto mb-3">
                    <div class="card">
                        <div class="card-title">
                            <h6 class="mt-3 ms-3">Számlázási adatok:</h6>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label"  for="last_name">Vezetéknév:</label>
                                <input class="form-control" value="{{ Auth::user()->last_name }}" type="text" name="last_name" placeholder="Vezetéknév" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"  for="first_name">Keresztnév:</label>
                                <input class="form-control" value="{{ Auth::user()->first_name }}" type="text" name="first_name" placeholder="Keresztnév" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"  for="email">Email:</label>
                                <input class="form-control" value="{{ Auth::user()->email }}" type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"  for="postal_code">Irányítószám:</label>
                                <input class="form-control" value="{{ Auth::user()->postal_code }}" type="number" name="postal_code" placeholder="Irányítószám" maxlength="4" pattern="[0-9]{4}" min="0000" max="9999" title="Nem megfelelő formátum!" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"  for="city">Város:</label>
                                <input class="form-control" value="{{ Auth::user()->city }}" type="text" name="city" placeholder="Város" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"  for="address">Cím:</label>
                                <input class="form-control" value="{{ Auth::user()->address }}" type="text" name="address" placeholder="Cím" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"  for="phone_number">Telefonszám:</label>
                                <input class="form-control" value="{{ Auth::user()->phone_number }}" type="text" name="phone_number" placeholder="Telefonszám" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 mx-auto">
                    <div class="card">
                        <div class="card-title">
                            <h6 class="mt-3 ms-3">Tételek:</h6>
                            <hr>
                        </div>
                        @php
                            $purch_price = 0;
                        @endphp
                        <div class="card-body">
                            <table class="table table-responsive checkout-table w-100">
                                <tbody>
                                    <tr>
                                        <th>termék neve</th>
                                        <th class="text-center">db</th>
                                        <th class="text-center">ár</th>
                                    </tr>
                                    @foreach ($cartItems as $item)
                                        <tr>
                                            <td>{{ $item->products->model }}</td>
                                            <td class="text-center">{{ $item->product_quantity }}</td>
                                            <td class="text-end">{{ number_format($item->products->price, 0, '.', '.') }}.-</td>
                                        </tr>
                                        @php
                                            $purch_price += $item->products->price * $item->product_quantity;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            @php
                                $total_price = number_format($purch_price, 0, '.', '.')
                            @endphp
                            <h6 class="col ms-3">Bruttó végösszeg: </h6>
                            <h6 class="col text-end me-3">{{ $total_price == 0 ? "" : "$total_price .-" }}</h6>
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-danger mt-2 float-end {{ $cartItems->isEmpty() ? "disabled" : "" }} " type="submit">Megrendel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


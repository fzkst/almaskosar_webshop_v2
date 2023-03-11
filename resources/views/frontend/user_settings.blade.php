@extends('layouts.frontend')

@section('content')
    <div class="container py-4">
        <form action="{{ url('update_settings') }}" method="post" class="checkout-form">
            @csrf
            <div class="mx-auto mb-3">
                <div class="card">
                    <div class="card-title row mt-3">
                        <div class="col d-flex mt-2 align-items-center">
                            <h6 class="ms-4">Személyes adatok:</h6>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary me-3 float-end" type="submit">Módosítás</button>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="last_name">Vezetéknév:</label>
                            <input class="form-control" value="{{ Auth::user()->last_name }}" type="text"
                                name="last_name" placeholder="Vezetéknév">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="first_name">Keresztnév:</label>
                            <input class="form-control" value="{{ Auth::user()->first_name }}" type="text"
                                name="first_name" placeholder="Keresztnév">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Email:</label>
                            <input class="form-control" value="{{ Auth::user()->email }}" type="email" name="email"
                                placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="postal_code">Irányítószám:</label>
                            <input class="form-control" value="{{ Auth::user()->postal_code }}" type="number"
                                name="postal_code" placeholder="Irányítószám" maxlength="4" pattern="[0-9]{4}"
                                min="0000" max="9999" title="Nem megfelelő formátum!" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="city">Város:</label>
                            <input class="form-control" value="{{ Auth::user()->city }}" type="text" name="city"
                                placeholder="Város" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address">Cím:</label>
                            <input class="form-control" value="{{ Auth::user()->address }}" type="text" name="address"
                                placeholder="Cím" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="phone_number">Telefonszám:</label>
                            <input class="form-control" value="{{ Auth::user()->phone_number }}" type="text"
                                name="phone_number" placeholder="Telefonszám" required>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

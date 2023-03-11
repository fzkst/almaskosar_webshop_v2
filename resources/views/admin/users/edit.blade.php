@extends('admin.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Felhasználó szerkesztése</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('users/'.$user->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <div class="mb-4">
                        <label class="form-label" for="">Vezetéknév</label>
                        <input type="text" value="{{ $user->last_name }}" class="form-control" name="last_name">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Keresztnév</label>
                        <input type="text" value="{{ $user->first_name }}" class="form-control" name="first_name">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Email</label>
                        <input type="text" value="{{ $user->email }}" class="form-control" name="email">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Irányítószám</label>
                        <input type="text" value="{{ $user->postal_code }}" class="form-control" name="postal_code">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Város</label>
                        <input type="text" value="{{ $user->city }}" class="form-control" name="city">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Cím</label>
                        <input type="text" value="{{ $user->address }}" class="form-control" name="address">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Telefonszám</label>
                        <input type="text" value="{{ $user->phone_number }}" class="form-control" name="phone_number">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Vevőkód</label>
                        <input type="text" value="{{ $user->customer_code }}" class="form-control" name="customer_code">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-outline-secondary mt-2" id="btn_hozzaad">Módosít</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


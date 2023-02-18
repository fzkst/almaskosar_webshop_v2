@extends('admin.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Új felhasználó hozzáadása</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('customers')}} " method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="mb-4">
                        <label class="form-label" for="">User Id</label>
                        <input type="text" class="form-control" name="user_id" value="{{ old('user_id') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-check-label" for="">Magánszemély</label>
                        <input type="checkbox" class="form-check-control ms-2" name="person" value="{{ old('person') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Cégnév</label>
                        <input type="text" class="form-control" name="company" value="{{ old('company') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Vezetéknév</label>
                        <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Keresztnév</label>
                        <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Irányítószám</label>
                        <input type="number" class="form-control" name="postal_code" maxlength="4" value="{{ old('postal_code') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Város</label>
                        <input type="text" class="form-control" name="city" value="{{ old('city') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Cím:</label>
                        <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Telefonszám</label>
                        <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Adószám</label>
                        <input type="text" class="form-control" name="tax_number" maxlength="13" value="{{ old('tax_number') }}">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-outline-secondary mt-3" id="btn_hozzaad">Hozzáad</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


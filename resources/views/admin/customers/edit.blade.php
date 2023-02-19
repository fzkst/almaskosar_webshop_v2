@extends('admin.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Felhasználó szerkesztése</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('customers/'.$customer->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <div class="mb-4">
                        <label class="form-label" for="">User Id</label>
                        <input type="text" value="{{ $customer->user_id }}" class="form-control" name="user_id">
                    </div>
                    <div class="mb-4">
                        <label class="form-check-label" for="">Magánszemély</label>
                        <input type="checkbox" value="{{ $customer->person }}"  class="form-check-control" name="person">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Cégnév</label>
                        <input type="text" value="{{ $customer->company }}" class="form-control" name="company">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Vezetéknév</label>
                        <input type="text" value="{{ $customer->last_name }}" class="form-control" name="last_name">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Keresztnév</label>
                        <input type="text" value="{{ $customer->first_name }}" class="form-control" name="first_name">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Irányítószám</label>
                        <input type="text" value="{{ $customer->postal_code }}" class="form-control" name="postal_code">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Város</label>
                        <input type="text" value="{{ $customer->city }}" class="form-control" name="city">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Cím</label>
                        <input type="text" value="{{ $customer->address }}" class="form-control" name="address">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Telefonszám</label>
                        <input type="text" value="{{ $customer->phone_number }}" class="form-control" name="phone_number">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Adószám</label>
                        <input type="text" value="{{ $customer->tax_number }}" class="form-control" name="tax_number">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-outline-secondary mt-2" id="btn_hozzaad">Módosít</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


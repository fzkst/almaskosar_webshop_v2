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
                        <input type="checkbox" value="{{ $customer->maganszemely }}"  class="form-check-control" name="maganszemely">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Cégnév</label>
                        <input type="text" value="{{ $customer->cegnev }}" class="form-control" name="cegnev">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Vezetéknév</label>
                        <input type="text" value="{{ $customer->vezeteknev }}" class="form-control" name="vezeteknev">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Keresztnév</label>
                        <input type="text" value="{{ $customer->keresztnev }}" class="form-control" name="keresztnev">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Irányítószám</label>
                        <input type="text" value="{{ $customer->iranyitoszam }}" class="form-control" name="iranyitoszam">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Város</label>
                        <input type="text" value="{{ $customer->varos }}" class="form-control" name="varos">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Cím</label>
                        <input type="text" value="{{ $customer->cim }}" class="form-control" name="cim">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Telefonszám</label>
                        <input type="text" value="{{ $customer->telefon }}" class="form-control" name="telefon">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Adószám</label>
                        <input type="text" value="{{ $customer->adoszam }}" class="form-control" name="adoszam">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-outline-secondary mt-2" id="btn_hozzaad">Módosít</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


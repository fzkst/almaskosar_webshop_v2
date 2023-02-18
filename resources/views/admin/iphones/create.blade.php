@extends('admin.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Új mobil hozzáadása</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('/iphones')}} " method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="mb-4">
                        <label class="form-label" for="">Modell</label>
                        <input type="text" class="form-control" name="model" value="{{ old('model') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Szín</label>
                        <input type="text" class="form-control" name="color" value="{{ old('color') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Tárhely</label>
                        <input type="text" class="form-control" name="storage" value="{{ old('storage') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Ár</label>
                        <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Készlet</label>
                        <input type="text" class="form-control" name="stock" value="{{ old('stock') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-file" for="">Kép feltöltése:</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-outline-secondary mt-3" id="btn_hozzaad">Hozzáad</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
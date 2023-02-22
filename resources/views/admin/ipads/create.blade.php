@extends('admin.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Új táblagép hozzáadása</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('/ipads')}} " method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="mb-4">
                        <label class="form-label" for="">Kategória</label>
                        <select class="form-select" name="category_id">
                            <option selected>Válassz kategóriát</option>
                            @foreach ($categories as $item)
                                <option name="category_id" value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
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
                        <label class="form-check-label" for="">Cellular</label>
                        <input type="checkbox" class="form-check-control" name="cellular" value="{{ old('cellular') }}">
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

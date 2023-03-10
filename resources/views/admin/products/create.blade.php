@extends('admin.admin')

@section('content')
    <div class="card mb-5">
        <div class="cardheader mt-2">
            <h5>Új mobil hozzáadása</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('products')}} " method="POST" enctype="multipart/form-data">
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
                        <label class="form-label" for="">CPU</label>
                        <input type="text" class="form-control" name="cpu" value="{{ old('cpu') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Memória</label>
                        <input type="text" class="form-control" name="memory" value="{{ old('memory') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Leírás</label>
                        <textarea class="form-control" name="description" rows="5" value="{{ old('description') }}"></textarea>
                    </div>
                    <div class="row">
                        <div class="col mb-4">
                            <input type="checkbox" class="form-check-control" name="cellular" value="{{ old('cellular') }}">
                            <label class="form-check-label" for="">Cellular</label>
                        </div>
                        <div class="col mb-4">
                            <input type="checkbox" class="form-check-control" name="popular" value="{{ old('popular') }}">
                            <label class="form-check-label" for="">Népszerű</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Ár</label>
                        <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Akciós ár</label>
                        <input type="text" class="form-control" name="sale_price" value="{{ old('sale_price') }}">
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


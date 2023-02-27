@extends('admin.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Mobil szerkesztése</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('iphones/'.$iphone->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <div class="mb-4">
                        <label class="form-label" for="">Kategória</label>
                        <select class="form-select" name="category_id" value="{{ old('category_id') }}">
                            <option selected>Válassz kategóriát</option>
                            @foreach ($categories as $item)
                                <option name="category_id" value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Modell</label>
                        <input type="text" value="{{ $iphone->model }}" class="form-control" name="model">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Szin</label>
                        <input type="text" value="{{ $iphone->color }}" class="form-control" name="color">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Tárhely</label>
                        <input type="text" value="{{ $iphone->storage }}" class="form-control" name="storage">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Ár</label>
                        <input type="text" value="{{ $iphone->price }}" class="form-control" name="price">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Készlet</label>
                        <input type="text" value="{{ $iphone->stock }}" class="form-control" name="stock">
                    </div>
                    @if($iphone->image)
                        <img src="{{ asset('img/uploads/iphones/'.$iphone->image)}}" class="kategoriakep" alt="mobilkép">
                    @endif
                    <div class="mb-4">
                        <label class="form-file mb-2" for="">Kép feltöltése:</label>
                        <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-outline-secondary mt-2" id="btn_hozzaad">Módosít</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

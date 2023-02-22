@extends('admin.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Táblagép szerkesztése</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('ipads/'.$ipad->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    {{-- <div class="mb-4">
                        <label class="form-label" for="">Kategória</label>
                        <select class="form-select" aria-label="Default select example" name="category_id" value="{{ old('category_id') }}">
                            <option selected>Válassz kategóriát</option>
                            <option value="1">iPhone</option>
                            <option value="2">iPad</option>
                            <option value="3">macBook</option>
                        </select>
                    </div> --}}
                    <div class="mb-4">
                        <label class="form-label" for="">Kategória</label>
                        <select class="form-select" name="category_id" value="{{ old('category_id') }}">
                            <option selected>Válassz kategóriát</option>
                            @foreach ($categories as $item)
                                <option name="category_id" value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                {{--     <div class="mb-4">
                        <label class="form-label" for="">Kategória</label>
                        <select class="form-select" name="category_id" value="{{ old('category_id') }}">
                            <option value="">{{ $ipad->categories->name }}</option>
                        </select>
                    </div> --}}
                    <div class="mb-4">
                        <label class="form-label" for="">Modell</label>
                        <input type="text" value="{{ $ipad->model }}" class="form-control" name="model">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Szin</label>
                        <input type="text" value="{{ $ipad->color }}" class="form-control" name="color">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Tárhely</label>
                        <input type="text" value="{{ $ipad->storage }}" class="form-control" name="storage">
                    </div>
                    <div class="mb-4">
                        <label class="form-check-label" for="">Cellular</label>
                        <input type="checkbox" value="{{ $ipad->cellular }}"  class="form-check-control" name="cellular">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Ár</label>
                        <input type="text" value="{{ $ipad->price }}" class="form-control" name="price">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Készlet</label>
                        <input type="text" value="{{ $ipad->stock }}" class="form-control" name="stock">
                    </div>
                    @if($ipad->image)
                        <img src="{{ asset('img/uploads/ipads/'.$ipad->image)}}" class="kategoriakep" alt="mobilkép">
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

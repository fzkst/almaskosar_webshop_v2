@extends('admin.admin')

@section('content')
    @if ($errors->any())
        <div class=" container ms-5 mt-3 alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <div class="container py-5 ms-5">
        <div class="card mb-5">
            <div class="cardheader mt-2">
                <h5>Termék adatainak szerkesztése</h5>
                <hr>
            </div>
            <div class="card-body" id="kategoria_urlap">
                <form action="{{ url('products/'.$product->id)}} " method="POST" enctype="multipart/form-data">
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
                            <input type="text" value="{{ $product->model }}" class="form-control" name="model">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="">Szin</label>
                            <input type="text" value="{{ $product->color }}" class="form-control" name="color">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="">Tárhely</label>
                            <input type="text" value="{{ $product->storage }}" class="form-control" name="storage">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="">CPU</label>
                            <input type="text" value="{{ $product->cpu }}" class="form-control" name="cpu">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="">Memória</label>
                            <input type="text" value="{{ $product->memory }}" class="form-control" name="memory">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="">Leírás</label>
                            <textarea value="{{ $product->description }}" class="form-control" name="description" rows="5"></textarea>
                        </div>
                        <div class="row">
                            <div class="col mb-4">
                                <input type="checkbox" value="{{ $product->cellular }}" class="form-check-control" name="cellular">
                                <label class="form-check-label" for="">Cellular</label>
                            </div>
                            <div class="col mb-4">
                                <input type="checkbox" value="{{ $product->popular }}" class="form-check-control" name="popular">
                                <label class="form-check-label" for="">Népszerű</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="">Ár</label>
                            <input type="text" value="{{ $product->price }}" class="form-control" name="price">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="">Akciós ár</label>
                            <input type="text" value="{{ $product->sale_price }}" class="form-control" name="sale_price">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="">Készlet</label>
                            <input type="text" value="{{ $product->stock }}" class="form-control" name="stock">
                        </div>
                        @if($product->image)
                            <img src="{{ asset('img/uploads/products/A'.$product->image)}}" class="kategoriakep" alt="mobilkép">
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
    </div>
@endsection

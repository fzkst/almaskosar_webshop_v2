@extends('admin.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Kategória szerkesztése</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('categories/'.$category->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <div class="mb-4">
                        <label class="form-label" for="">Kategória megnevezése</label>
                        <input type="text" value="{{ $category->name }}" class="form-control" name="name">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Táblanév</label>
                        <input type="text" value="{{ $category->table_name }}" class="form-control" name="table_name">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Leírás</label>
                        <textarea class="form-control" rows="6" name="description">{{ $category->description }}</textarea>
                    </div>
                    <div class="mb-4">
                        <input type="checkbox" value="{{ $category->status }}" id="status" class="form-check-control" name="status">
                        <label class="form-check-label ms-2" for="status">Státusz</label>
                    </div>
                    <div class="mb-4">
                        <input type="checkbox" value="{{ $category->popular }}" id="popular" class="form-check-control" name="popular">
                        <label class="form-check-label ms-2" for="popular">Népszerű termék</label>
                    </div>
                    @if($category->kepfajl)
                        <img src="{{ asset('img/uploads/categories/'.$category->kepfajl)}}" class="kategoriakep mb-4" alt="kategóriakép">
                    @endif
                    <div class="mb-4">
                        <label class="form-file mb-2" for="">Kép feltöltése:</label>
                        <input type="file" class="form-control" name="image" value="{{ $category->image }}">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-outline-secondary mt-2" id="btn_hozzaad">Módosít</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

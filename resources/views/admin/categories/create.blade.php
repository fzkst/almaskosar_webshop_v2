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
        <div class="card">
            <div class="cardheader mt-2">
                <h5>Új kategória hozzáadása</h5>
                <hr>
            </div>
            <div class="card-body" id="kategoria_urlap">
                <form action="{{ url('categories')}} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <div class="mb-4">
                            <label class="form-label" for="">Kategória megnevezése</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="">Táblanév</label>
                            <input type="text" class="form-control" name="table_name" value="{{ old('table_name') }}">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="">Leírás</label>
                            <textarea class="form-control" rows="5" name="description" value="{{ old('description') }}"></textarea>
                        </div>
                        <div class="mb-4">
                            <input type="checkbox" class="form-check-control" id="status" name="status" value="{{ old('status') }}">
                            <label class="form-check-label ms-2" for="status">Státusz</label>
                        </div>
                        <div class="mb-4">
                            <input type="checkbox" class="form-check-control" id="popular" name="popular" value="{{ old('popular') }}">
                            <label class="form-check-label ms-2" for="popular">Kiemelt kategória</label>
                        </div>
                        <div class="mb-4">
                            <label class="form-file mb-2" for="">Kép feltöltése:</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-outline-secondary mt-2" id="btn_hozzaad">Hozzáad</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

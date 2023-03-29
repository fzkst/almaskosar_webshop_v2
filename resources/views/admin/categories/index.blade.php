@extends('admin.admin')

@section('content')
    <div class="container py-5 ms-5">
        <div>
            <a href="{{ url('categories/create') }}"><button class="btn btn-outline-secondary mb-2" id="btn_uj_kategoria">Új kategória hozzáadása</button></a>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Kategóriák</h4>
                <hr>
            </div>
            <div class="card-body">
                <table class="table border-success">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Név</th>
                            <th>Leírás</th>
                            <th>Kép</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $item)
                            <tr class="align-middle">
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td><img src="{{ asset('img/uploads/categories/'.$item->image)}}" class="kategoriakep" alt="kategóriakép"></td>
                                <td class="align-middle text-center">
                                    <a href="{{ url('categories/'.$item->id.'/edit')}} "><button class="btn btn-edit btn-sm"><i class="bi bi-pencil-square"></i></button></a>
                                    <form action="{{ url('categories/'.$item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href=""><button class="btn btn-dangerer btn-sm mt-1"><i class="bi bi-trash3"></i></button></a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

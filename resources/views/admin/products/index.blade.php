@extends('admin.admin')

@section('content')
    <div>
        <a href="{{ url('products/create') }}"><button class="btn btn-outline-secondary mb-2" id="btn_uj_kategoria">Új termék hozzáadása</button></a>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Termékek</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordere border-success">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Kategória</th>
                        <th>Modell</th>
                        <th>Szín</th>
                        <th>Tárhely</th>
                        <th>Ár</th>
                        <th>Készlet</th>
                        <th >Kép</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr class="text-center align-middle">
                            <td>{{ $item->id }}</td>
                            @switch($item->category_id)
                                @case(1)
                                    <td>iPhone</td>
                                    @break
                                @case(2)
                                    <td>iPad</td>
                                    @break
                                @case(3)
                                    <td>macBook</td>
                                    @break
                                @default
                                    <td>nincs adat</td>
                            @endswitch
                            <td>{{ $item->model }}</td>
                            <td>{{ $item->color }}</td>
                            <td>{{ $item->storage }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->stock }}</td>
                            <td class="kepek"><img src="{{ asset('img/uploads/products/A'.$item->image)}}" class="kategoriakep" alt="mobilkép"></td>
                            <td class="align-middle text-center">
                                <a href="{{ url('products/'.$item->id.'/edit')}} "><button class="btn btn-edit btn-sm">Szerkesztés</button></a>
                                <form action="{{ url('products/'.$item->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href=""><button class="btn btn-dangerer btn-sm mt-1">Törlés</button></a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

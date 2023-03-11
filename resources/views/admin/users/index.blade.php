@extends('admin.admin')

@section('content')
    <div>
        <a href="{{ url('users/create') }}"><button class="btn btn-outline-secondary mb-2" id="btn_uj_kategoria">Új felhasználó hozzáadása</button></a>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Felhasználók</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table_felh">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Vezetéknév</th>
                        <th>Keresztnév</th>
                        <th>Email</th>
                        <th>Irányítószám</th>
                        <th>Város</th>
                        <th>Cím</th>
                        <th>Telefonszám</th>
                        <th>Vevőkód</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr class="align-middle">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->last_name }}</td>
                            <td>{{ $item->first_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->postal_code }}</td>
                            <td>{{ $item->city }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->phone_number }}</td>
                            <td>{{ $item->customer_code }}</td>
                            <td class="align-middle text-center">
                                <a href="{{ url('users/'.$item->id.'/edit')}} "><button class="btn btn-prim btn-sm">Szerkesztés</button></a>
                                <form action="{{ url('users/'.$item->id)}} " method="post">
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
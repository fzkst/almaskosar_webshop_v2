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
            <table class="table table_felh border-success">
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
                    @foreach ($users as $user)
                        <tr class="align-middle text-center">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->postal_code }}</td>
                            <td>{{ $user->city }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ $user->customer_code }}</td>
                            <td class="align-middle text-center">
                                <a href="{{ url('show_user_orders/'.$user->id)}} "><button class="btn btn-edit btn-sm mb-1">Rendelések</button></a>
                                <a href="{{ url('users/'.$user->id.'/edit')}}"><button class="btn btn-edit btn-sm">Szerkesztés</button></a>
                                <form action="{{ url('users/'.$user->id)}}" method="post">
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
@extends('admin.admin')

@section('content')
    <div>
        <a href="{{ url('customers/create') }}"><button class="btn btn-outline-secondary mb-2" id="btn_uj_kategoria">Új felhasználó hozzáadása</button></a>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Felhasználók</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered table_felh">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>User Id</th>
                        <th>Magánszemély</th>
                        <th>Cégnév</th>
                        <th>Vezetéknév</th>
                        <th>Keresztnév</th>
                        <th>Irányítószám</th>
                        <th>Város</th>
                        <th>Cím</th>
                        <th>Telefonszám</th>
                        <th>Adószám</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->person }}</td>
                            <td>{{ $item->company }}</td>
                            <td>{{ $item->last_name }}</td>
                            <td>{{ $item->first_name }}</td>
                            <td>{{ $item->postal_code }}</td>
                            <td>{{ $item->city }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->phone_number }}</td>
                            <td>{{ $item->tax_number }}</td>
                            <td class="align-middle text-center">
                                <a href="{{ url('customers/'.$item->id.'/edit')}} "><button class="btn btn-prim btn-sm">Szerkesztés</button></a>
                                <form action="{{ url('customers/'.$item->id)}} " method="post">
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

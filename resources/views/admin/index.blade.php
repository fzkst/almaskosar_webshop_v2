@extends('admin.admin')

@section('content')
    <div class="container py-4 ms-5">
        <div class="card">
            <div class="card-body">
                <h3 class="mb-4">Almáskosár</h3>
                @php
                    $felhasznalokSzama = count($users);
                    $termekekSzama = count($products);
                @endphp
                <div>
                    <div class="row">
                        <div class="col-2">
                            <div class="card p-2 text-center">
                                <div class="card-title">
                                    <h6>Felhasználók száma:</h6>
                                </div>
                                <div class="card-body">
                                    <h6>{{ $felhasznalokSzama }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="card p-2 text-center">
                                <div class="card-title">
                                    <h6>Termékek száma:</h6>
                                </div>
                                <div class="card-body">
                                    <h6 class="termekek_szama"></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card p-2">
                                <div class="card-title">
                                    <h6>Felhasználók városonként:</h6>
                                </div>
                                <div class="card-body">
                                    <table>
                                        @foreach ($usersCity2 as $user)
                                            <tr>
                                                <td class="pe-3">{{ $user->city }}</td>
                                                <td>{{ $user->id_count }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="card p-2">
                                <div class="card-title">
                                    <h6 class="ms-3">Alacsony készletek:</h6>
                                </div>
                                <div class="card-body keszlet">
                                    <table>
                                        <thead class="text-center">
                                            <th>Id</th>
                                            <th>Modell</th>
                                            <th>Szín</th>
                                            <th>Készlet</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($keszletek as $item)
                                                <tr class="text-center">
                                                    <td class="pe-3">{{ $item->id }}</td>
                                                    <td>{{ $item->model }}</td>
                                                    <td>{{ $item->color }}</td>
                                                    <td class=" {{ $item->stock == 0 ? 'text-danger' : '' }} ">{{ $item->stock }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

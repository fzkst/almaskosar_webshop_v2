@extends('admin.admin')

@section('content')
    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                <h4>Rendelések</h4>
                <hr>
            </div>
            <div class="card-body">
                <table class="table table_felh border-success">
                    <thead>
                        <tr class="text-center">
                            <th>Rendelés azonosító</th>
                            <th>Vevő azonosító</th>
                            <th>Név</th>
                            <th>Email</th>
                            <th>Cím</th>
                            <th>Telefonszám</th>
                            <th>Vevőkód</th>
                            <th>Rendelés összege</th>
                            <th>Állapot</th>
                            <th>Üzenet</th>
                            <th>Rendelésszám</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr class="align-middle text-center">
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user_id }}</td>
                                <td><a class="userLink" href="{{ url('users/'.$order->user_id.'/edit')}}">{{ $order->first_name.' '.$order->last_name }}</a></td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->postal_code.'. '.$order->city.', '.$order->address }}</td>
                                <td>{{ $order->phone_number }}</td>
                                <td>{{ $order->customer_code }}</td>
                                <td>{{ $order->total_price }}</td>
                                <td>{{ $order->status == 0 ? "folyamatban" : "teljesítve"}}</td>
                                <td>{{ $order->message }}</td>
                                <td>{{ $order->tracking_number }}</td>
                                <td class="align-middle text-center">
                                    <a href="{{ url('orders/'.$order->id)}}" class="btn btn-view btn-sm mb-1">Részletek</a>
                                    <a href="{{ url('edit_order/'.$order->id)}}"><button class="btn btn-edit btn-sm"><i class="bi bi-pencil-square"></i></button></a>   {{-- <button class="btn btn-edit btn-sm">Szerkesztés</button> --}}
                                    <form action="{{ url('orders/'.$order->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href=""><button class="btn btn-dangerer btn-sm mt-1"><i class="bi bi-trash3"></i></button></a>   {{-- <button class="btn btn-dangerer btn-sm mt-1">Törlés</button> --}}
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


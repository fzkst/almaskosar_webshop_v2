@extends('admin.admin')

@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-header">
                <h4>{{ $user->first_name . ' ' . $user->last_name }} rendelései</h4>
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
                        @if ($orders->isEmpty())
                            <h6 class="py-4 text-center">Az ügyfél még nem adott le rendelést</h6>
                        @else
                            @foreach ($orders as $order)
                                <tr class="align-middle text-center">
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->user_id }}</td>
                                    <td>{{ $order->first_name . ' ' . $order->last_name }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->postal_code . '. ' . $order->city . ', ' . $order->address }}</td>
                                    <td>{{ $order->phone_number }}</td>
                                    <td>{{ $order->customer_code }}</td>
                                    <td>{{ $order->total_price }}</td>
                                    <td>{{ $order->status == 0 ? 'folyamatban' : 'teljesítve' }}</td>
                                    <td>{{ $order->message }}</td>
                                    <td>{{ $order->tracking_number }}</td>
                                    <td class="align-middle text-center">
                                        <a href="{{ url('orders/'.$order->id) }}" class="btn btn-view btn-sm mb-1">Részletek</a>
                                        <a href="{{ url('orders/'.$order->id) }} "><button
                                                class="btn btn-edit btn-sm">Szerkesztés</button></a>
                                        <form action="{{ url('orders/' . $order->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href=""><button
                                                    class="btn btn-dangerer btn-sm mt-1">Törlés</button></a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

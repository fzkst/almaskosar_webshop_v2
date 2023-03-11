@extends('layouts.frontend')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-title ms-3 mt-4">
                        <h4 class="text-start">{{ Auth::user()->name }} rendelései:</h4>
                    </div>
                    <hr>
                    <div class="card-body">
                        @if ($orders->isEmpty())
                            <h5 class="text-center my-3">Önnek még nincs rendelése.</h5>
                        @else
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th>Rendelés dátuma</th>
                                        <th>Rendelésszám</th>
                                        <th>Rendelés összege</th>
                                        <th>Rendelés állapota</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr class="align-middle">
                                            <td>{{ date('Y-m-d', strtotime($order->created_at)) }}</td>
                                            <td>{{ $order->tracking_number }}</td>
                                            <td class="text-end">{{ number_format($order->total_price, 0, '.', '.') }}.-</td>
                                            <td class="text-center">{{ $order->status == '0' ? 'folyamatban' : 'teljesítve'}}</td>
                                            <td class="text-center"><a href="{{ url('show_orders/'.$order->id) }}" class="btn btn-sm btn-primary">Megnéz</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
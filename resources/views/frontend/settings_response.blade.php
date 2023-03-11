@extends('layouts.frontend')

@section('content')
    <div class="container py-5 text-center">
        <div class="card">
            <h3 class="my-3">Adatait sikeresen módosította!</h3>
            <a href="{{ url('/')}}" class="mb-2"><button class="btn btn-primary">Vásárlás folytatása</button></a>
        </div>
    </div>
@endsection


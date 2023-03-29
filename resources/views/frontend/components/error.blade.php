@extends('layouts.frontend')

@section('content')
    <div class="py-3 mb-4 shadow-sm linkline border-top">
        <div class="container">
            <h6 class="mb-0"><a href="{{ url('/') }}"><span class=" h6-bold">Almáskosár /</span></a></h6>
        </div>
    </div>

    <div class="container row mx-auto gap-3">
        <h2 class="container py-3">Készülékek</h2>
        <div class="col-2">
            @include('frontend.components.filter')
        </div>

        <div class="col-9">
            <div class="container p-5">
                <div class="card text-center">
                    <h3 class="m-3">{{ $errorMessage }}</h3>
                    <div class="mb-2">
                       {{--  <a href="{{ url('frontend/iphones') }}"><button class="btn btn-primary">Vissza</button></a> --}}
                        <a href="{{ URL::previous() }}"><button class="btn btn-primary">Vissza</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


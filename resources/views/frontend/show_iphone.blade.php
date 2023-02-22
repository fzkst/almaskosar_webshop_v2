@extends('layouts.frontend')

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0"><a href="{{ url('/') }}">Collections /</a>
                @php
                    $kategoria_neve = DB::table('categories')->where('id', $iphone->category_id)->get('name');
                @endphp
                <a href="{{ url('/frontend/'.$kategoria_neve[0]->name)}}">{{ $kategoria_neve[0]->name;}}</a>
                / {{ $iphone->model }}
            </h6>
        </div>
    </div>
    <div class="container py-5 iphones">
        <div class="card mx-auto shadow" style="max-width: 40rem">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="2000">
                    <img src="{{ asset('img/uploads/iphones/' . $iphone->image) }}" alt="{{ $iphone->image }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('img/uploads/iphones/'.'B'.$iphone->image) }}" alt="{{ $iphone->image }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('img/uploads/iphones/'.'C'.$iphone->image) }}" alt="{{ $iphone->image }}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <div class="card-body">
                <h5>{{ $iphone->model }}</h5>
                <div class="card-text">
                    <li>{{ $iphone->color }}</li>
                    <li>{{ $iphone->storage }} GB</li>
                </div>
                @php
                    $formated_price = number_format($iphone->price, 0, '.', '.');
                @endphp
                <span class="float-end">{{ $formated_price }}.-</span class="float-end">
            </div>
            <div class="card-footer">
                <a href="">Részletek</a>
                <a class="float-end" href="">Kosárba</a>
            </div>
        </div>
    </div>
@endsection

{{-- @section('scripts')
    <script>
        $('.selected-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            nav: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: true
            },
            1000: {
                items: 1,
                nav: true,
                loop: false
            }
        })
    </script>
@endsection
<div class="owl-carousel selected-carousel owl-theme">
    <div><img class="w-100" src="{{ asset('img/uploads/iphones/' . $iphone->image) }}" alt="{{ $iphone->image }}"></div>
    <div><img class="w-100" src="{{ asset('img/uploads/iphones/'.'B'.$iphone->image) }}" alt="{{ $iphone->image }}"></div>
    <div><img class="w-100" src="{{ asset('img/uploads/iphones/'.'C'.$iphone->image) }}" alt="{{ $iphone->image }}"></div>
</div> --}}
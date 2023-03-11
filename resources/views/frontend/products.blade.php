@extends('layouts.frontend')

@section('content')
    <div class="py-3 mb-4 shadow-sm linkline border-top">
        <div class="container">
            <h6 class="mb-0"><a href="{{ url('/') }}"><span class=" h6-bold">Almáskosár /</span></a>
                <span>{{ $categories[$products[0]->category_id - 1]->name }}</span>
            </h6>
        </div>
    </div>

    <div class="container-fluid row mx-auto gap-3">
        <h2 class="container py-3">Készülékek</h2>
        <div class="col-2">
            @include('frontend.components.filter')
        </div>

        <div class="col-9">
            <div class="container py-2 iphones">
                <div class="row g-5">
                    @foreach ($products as $product)
                        <div class="card productData2 col-md-3 col-lg-4 mx-auto me-3 shadow kiskartya" style="max-width: 18rem">
                            <img class="img-rounded"
                                src="{{ asset('img/uploads/products/' . Arr::random($letters) . $product->image) }}"
                                alt="{{ $product->image }}">
                            <div class="card-body">
                                <p class="fw-bold">{{ $product->model }}</p>
                                <div class="card-text">
                                    <li>{{ $product->color }}</li>
                                    <li>{{ $product->storage }} GB</li>

                                    <input type="hidden" class="categoryId2" value="{{ $product->category_id }}">
                                    <input type="hidden" class="productId2" value="{{ $product->id }}">
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <span class="{{ $product->stock > 0 ? 'text-success' : 'text-danger' }}">Elérhető: <span class="fw-bold">{{ $product->stock }}</span></span>
                                    </div>
                                    <div class="col">
                                        @php
                                            $formated_price = number_format($product->price, 0, '.', '.');
                                        @endphp
                                        <span class="float-end">{{ $formated_price }}.-</span class="float-end">
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <a class="col fw-bold text-primary"
                                        href="{{ url('/frontend/show_product/' . $product->id) }}">Részletek</a>
                                    <a style="{{ $product->stock <= 0 ? "pointer-events: none;" : "" }}" class="col d-flex justify-content-end addToCart2 text-primary" href="">Kosárba <i
                                            class="fa fa-shopping-cart mt-1 ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


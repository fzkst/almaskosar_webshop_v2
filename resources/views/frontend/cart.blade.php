@extends('layouts.frontend')

@section('content')
    <div class="container py-5">
        <div class="card shadow">
            <div class="card-body">
                @php
                    $carts = DB::table('carts')->get();
                    $purch_price = 0;
                @endphp
                @if ($carts->isEmpty())
                    <h5 class="text-center">A kosár üres.</h5>
                @endif
                @foreach ($cartItems as $item)
                    <div class="row productData">
                        <div class="col-2">
                            <img class="w-100" src="{{ asset('img/uploads/products/A'.$item->products->image) }}" alt="termékkép">
                        </div>
                        <div class="col-4 d-flex align-items-center">
                            <h6>{{ $item->products->model }}</h6>
                        </div>
                        <div class="col-2 d-flex align-items-center justify-content-end">
                            @php
                                 $formated_price = number_format($item->products->price, 0, '.', '.');
                            @endphp
                            <h6>{{ $formated_price }}.-</h6>
                        </div>
                        <div class="col-2 mt-3 d-flex align-items-center justify-content-end">
                            <input type="hidden" class="product_id" value="{{ $item->product_id }}">
                            <input type="hidden" class="stock-value" value="{{ $item->products->stock }}">
                            {{-- <label for="quantity">Mennyiség</label> --}}
                            @if ($item->products->stock >= $item->product_quantity)
                                <div class="input-group text-center mb-3 d-flex justify-content-end">
                                    <button class="input-group-text quantity-mod decrement">-</button>
                                    <input class="form-control quantity text-center" type="text" name="quantity" value="{{ $item->product_quantity}}">
                                    <button class="input-group-text quantity-mod increment">+</button>
                                </div>
                                @php
                                    $purch_price += $item->products->price * $item->product_quantity;
                                @endphp
                            @else
                                <div class="text-center mb-3 d-flex ">
                                    <h6 class="">Nincs raktáron</h6>
                                </div>
                            @endif
                        </div>
                        <div class="col-2 d-flex align-items-center justify-content-end mt-1">
                            <button class="btn btn-danger delete-cart-item"><i class="fa fa-trash"></i> Törlés</button>
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="card-footer row mx-0 mt-2">
                <div class="col mt-2 disabled">
                    <a style="{{ $carts->isEmpty() ? "pointer-events: none;" : "" }}" href="{{ asset('checkout')}}"><button class="btn btn-outline-primary">Pénztárba</button></a>
                </div>
                <div class="col mt-2 d-flex justify-content-end">
                    @php
                        $total_price = number_format($purch_price, 0, '.', '.')
                    @endphp
                    <h6 class="mt-2 me-5 fw-bold">{{ $carts->isEmpty() ? "" : "Bruttó végösszeg: $total_price .-" }}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection


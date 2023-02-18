@extends('admin.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>iPhone Webshop</h1>
            @php
                $felhasznalokSzama = count($felhasznalok);
                $mobilokSzama = count($iphones);
                $adatok2 = DB::table('customers')->select('last_name')->where('city', 'LIKE', '%Budapest%')->get();
                $adatok3 = DB::table('iphones')->select('color')->where('storage', 'LIKE', '128')->get();
                $adatok4 = DB::table('customers')->select('city')->groupBy('city')->count();
                $adatok5 = DB::table('customers')->select(DB::raw('count(*) as id_count, city'))->groupBy('city')->get();
            @endphp
            <div>
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <span>Felhasználók száma:</span>
                            </div>
                            <div class="card-body">
                                {{ $felhasznalokSzama }}
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <span>Termékek száma:</span>
                            </div>
                            <div class="card-body">
                                {{ $mobilokSzama }}
                                {{ $adatok2 }}
                                {{ $adatok3[0]->color }}
                                <p>{{ $adatok3[1]->color }}</p>
                                <p>{{ $adatok4 }}</p>
                                <p>{{ $adatok5 }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <span>Felhasználók száma:</span>
                            </div>
                            <div class="card-body">
                                @foreach ($adatok5 as $adat)
                                    <span>{{ $adat->city }}: </span><span>{{ $adat->id_count }}</span><br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection

<div class="container py-5">
    <div class="row">
        @php
            $kategoriak = DB::table('categories')->get();
            $link = "";
        @endphp
        @foreach ($kategoriak as $kategoria)
                <div class="card col me-3" style="width: 18rem">
                    <div class="card-body text-center">
                        <img class="w-75" src="{{ asset('img/uploads/categories/'.$kategoria->image) }}" alt="{{ $kategoria->image }}">
                    </div>
                    <a href="
                        @switch($kategoria->id)
                            @case(1)
                                /frontend/iphones
                                @break
                            @case(2)
                                /frontend/ipads
                                @break
                            @case(3)
                                /frontend/macbooks
                                @break
                            @endswitch
                    "><div class="card-footer text-center py-2">{{ $kategoria->name }}</div></a>
                </div>
        @endforeach
    </div>
</div>

<div class="container-fluid ms-4 py-3">
    <div class="row">
        @php
            $categories = DB::table('categories')->get();
        @endphp
        @foreach ($categories as $category)
                <div class="card col me-3" style="max-width: 8rem">
                    <div class="card-body p-2 text-center">
                        <a href="{{ asset('/frontend/'.$category->table_name) }}"><img class="w-75" src="{{ asset('img/uploads/categories/'.$category->image) }}" alt="{{ $category->image }}"></a>
                    </div>
                        <a href="{{ asset('/frontend/'.$category->table_name) }}"><div class="card-footer text-center py-2">{{ $category->name }}</div></a>
                </div>
        @endforeach
    </div>
</div>

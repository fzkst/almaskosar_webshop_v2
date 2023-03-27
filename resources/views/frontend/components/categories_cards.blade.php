<div class="container-fluid ms-4 py-3">
    <div class="row">
        @php
            $categories = DB::table('categories')->get();
        @endphp
        @foreach ($categories as $category)
                <div class="card col me-3" style="max-width: 8rem">
                    <div class="card-body p-2 text-center">
                        <a href="{{ route('/frontend/products', ['category' => $category->id]) }}"><img class="w-75" src="{{ asset('img/uploads/categories/'.$category->image) }}" alt="{{ $category->image }}"></a>
                    </div>
                        <a href="{{ route('/frontend/products', ['category' => $category->id]) }}"><div class="card-footer text-center py-2">{{ $category->name }}</div></a>
                </div>
        @endforeach
    </div>
</div>

<div class="container py-5">
    <div class="row">
        @php
            $categories = DB::table('categories')->get();
        @endphp
        @foreach ($categories as $category)
                <div class="card col me-3" style="width: 18rem">
                    <div class="card-body text-center">
                        <img class="w-75" src="{{ asset('img/uploads/categories/'.$category->image) }}" alt="{{ $category->image }}">
                    </div>
                    <a href="
                        {{ asset('/frontend/'.$category->table_name) }}
                    "><div class="card-footer text-center py-2">{{ $category->name }}</div></a>
                </div>
        @endforeach
    </div>
</div>

<div class="row filter p-2">
    @if (str_contains($modelNames[0]->model, "iPhone"))
        @php
            $category_id = 1;
        @endphp
    @elseif (str_contains($modelNames[0]->model, "iPad"))
        @php
            $category_id = 2;
        @endphp
    @else
        @php
            $category_id = 3;
        @endphp
    @endif
{{--     <form action="{{ url('filter')}} " method="GET" enctype="multipart/form-data"> --}}
    <form action="{{ route('filter', ['category' => $category_id]) }}" method="GET" enctype="multipart/form-data">


        @csrf
   {{--      <input type="hidden" name="link" value="{{ $link }}"> --}}
        <div class="card p-3 w-100">
            <div>
                <h6 class="fw-bold ms-4">Modellek</h6>
            </div>
            @foreach ($modelNames as $model)
                @php
                    $checked = [];
                    if(isset($_GET['models'])){
                        $checked = $_GET['models'];
                    }
                @endphp
                <div class="mb-1">
                    <input class="form-check-input" type="checkbox" name="models[]" value="{{ $model->model }}" id="{{ $model->model }}"
                    @if (in_array($model->model, $checked)) checked @endif>
                    <label class="form-check-label ms-1" for="{{ $model->model }}">{{ $model->model.' '}}</label>
                </div>
            @endforeach
        </div>

        <div class="card p-3 w-100 mt-3">
            <div>
                <h6 class="fw-bold ms-4">Tárhely</h6>
            </div>
            @foreach ($modelStorages as $storage)
                @php
                    $checked = [];
                    if(isset($_GET['storages'])){
                        $checked = $_GET['storages'];
                    }
                @endphp
                <div class="mb-1">
                    <input class="form-check-input" type="checkbox" name="storages[]" value="{{ $storage->storage }}" id="{{ $storage->storage }}"
                    @if (in_array($storage->storage, $checked)) checked @endif>
                    <label class="form-check-label ms-1" for="{{ $storage->storage }}">{{ $storage->storage.' '}}{{$storage->storage <= 2  ? "TB" : "GB"}}</label>
                </div>
            @endforeach
        </div>

        <div class="card p-3 w-100 mt-3">
            <div>
                <h6 class="fw-bold ms-4">Színek</h6>
            </div>
            @foreach ($modelColors as $color)
                @php
                    $checked = [];
                    if(isset($_GET['colors'])){
                        $checked = $_GET['colors'];
                    }
                @endphp
                <div class="mb-1">
                    <input class="form-check-input" type="checkbox" name="colors[]" value="{{ $color->color }}" id="{{ $color->color }}"
                    @if (in_array($color->color, $checked)) checked @endif>
                    <label class="form-check-label ms-1" for="{{ $color->color }}">{{ $color->color}}</label>
                </div>
            @endforeach
        </div>
        <div class="card p-0 w-100 mt-3 rounded-pill">
            <button class="btn btn-primary rounded-pill" type="submit">Szűrés</button>
        </div>
    </form>
</div>


<div class="row filter p-2">
    @if (str_contains($modelNames[0]->model, "iPhone"))
        @php
            $link = "iphones"
        @endphp
    @elseif (str_contains($modelNames[0]->model, "iPad"))
        @php
            $link = "ipads"
        @endphp
    @else
        @php
            $link = "macbooks"
        @endphp
    @endif
    <form action="{{ url('filter/'.$link )}} " method="GET" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="link" value="{{ $link }}">
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
        <div class="">
            <button class="btn btn-primary" type="submit">Szűrés</button>
        </div>
    </form>
</div>

@section('script')
    <script>
        let
    </script>
@endsection
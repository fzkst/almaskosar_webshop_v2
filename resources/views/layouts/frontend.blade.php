<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('img/apple_128_icon.ico')}}" type="image/x-icon">
    {{--BOOTSTRAP--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{--SWEET ALERT2--}}
    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    {{--OWL CAROUSEL--}}
    <link rel="stylesheet" href="{{ asset('/css/owlcarouselmin.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/owlthemedefaultmin.css')}}">
    {{--FONT AWESOME--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    {{--CUSTOM--}}
    <link rel="stylesheet" href="{{ asset('css/frontend.css')}}">

</head>

<body>
    <header>
        @include('frontend.components.frontendnavbar')
        @include('frontend.components.carousel')
    </header>
    <main> {{-- class=shadow? --}}
        <div>
            @yield('content')
        </div>
    </main>
    <footer>
        @include('frontend.components.frontendfooter')
    </footer>
</div>
</div>
</div>

    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('message'))
        <script>
            swal("{{ session('message') }}")
            Swal.fire({
                icon: icon,
                text: message,
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    @if (session('status'))
        <script>
            swal("{{ session('status') }}")
            Swal.fire({
                icon: icon,
                text: status,
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    <script src="{{ asset('https://kit.fontawesome.com/42d5adcbca.js') }}" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="/js/owlcarouselmin.js"></script>
    @yield('scripts')
</body>

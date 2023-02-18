<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 sidenav">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/dashboard" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none mt-3">
                    <img src="img/apple_nav_brand.png" alt="main_logo"> <span class="fs-5 d-none d-sm-inline brand_text ms-3 mt-2">Almáskosár</span>
                </a>
                <hr class="container">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="px-0 align-middle">
                            <i class="fs-4 bi-speedometer2 {{ Request::is('dashboard') ? 'active' : '' }} p-1"></i> <span class="ms-1 d-none d-sm-inline ms-3">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('categories') }}" class="px-0 align-middle">
                            <i class="fs-4 bi-grid p-1 {{ Request::is('categories') ? 'active' : '' }}"></i><span class="ms-1 d-none d-sm-inline ms-3">Kategóriák</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('iphones') }}" class="px-0 align-middle">
                            <i class="fs-4 bi-table p-1 {{ Request::is('iphones') ? 'active' : '' }}"></i><span class="ms-1 d-none d-sm-inline ms-3">Mobilok</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('customers') }}" class="px-0 align-middle">
                            <i class="fs-4 bi-people p-1 {{ Request::is('customers') ? 'active' : '' }}"></i> <span class="ms-1 d-none d-sm-inline ms-2">Felhasználók</span> </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('rendelesek') }}" class="px-0 align-middle">
                            <i class="fs-4 bi-table p-1 {{ Request::is('rendelesek') ? 'active' : '' }}"></i><span class="ms-1 d-none d-sm-inline ms-3">Rendelések</span></a>
                    </li>

                    <li>
                        <a href="#" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Valami 1</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">- kateg.</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">- kateg.</span> 2</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ url('termekek') }}" data-bs-toggle="collapse" class="nav-link px-0 align-middle {{ Request::is('termekek') ? 'active' : '' }}">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Valami 2</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">- iPhone</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">- iPad</span> 2</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">- MacBook</span> 3</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">- iMac</span> 4</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ url('egyeb') }}" data-bs-toggle="collapse" class="nav-link px-0 align-middle {{ Request::is('egyeb') ? 'active' : '' }}">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Egyéb</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                            </li>
                        </ul>
                    </li>




                </ul>
                <hr class="container">
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://www.kindpng.com/picc/m/71-716330_admin-logo-in-circle-hd-png-download.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1 ms-3">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                Kijelentkezés
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3" id="content">


            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            @endif



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
                integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
                integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
            </script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>




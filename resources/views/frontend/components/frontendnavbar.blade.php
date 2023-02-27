<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="mt-1 me-3">
                <a class="navbar-brand" href="{{ url('/') }}"><img class="mb-2" src="/img/apple_nav_brand.png" alt="brand"/><span class="ms-2">Almáskosár</span></a>
            </div>
            {{-- LEFT SIDE --}}
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/frontend/iphones*') ? 'active' : '' }}" href="{{ url('/frontend/iphones') }}">iPhone</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/frontend/ipads*') ? 'active' : '' }}" href="{{ url('/frontend/ipads') }}">iPad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ Request::is('/frontend/macbooks*') ? 'active' : '' }}" href="{{ url('/frontend/macbooks') }}">MacBook</a>
                </li>
            </ul>
            {{-- RIGHT SIDE --}}
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 float-e">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Belépés') }}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Regisztráció') }}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='/cart'><i class="bi bi-cart3 cart-icon"></a></i>
                        </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

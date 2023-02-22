<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="/img/apple_nav_brand.png" alt="brand"/></a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost:8000/dashboard">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href='/'>Disabled</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 float-e">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Belépés</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Regisztráció</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

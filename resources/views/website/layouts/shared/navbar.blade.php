
<div class="sticky-top"><nav class="navbar navbar-expand-lg navbar-light bg-white  sh">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Sumburero') }}</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if (request()->routeIs('welcome')) active @endif" aria-current="page" href="{{ route('welcome') }}">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Actividades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  @if (request()->routeIs('contact')) active @endif" href="{{ route('contact') }}">Contacte -nos</a>
                </li>
            </ul>
        </div>
    </div>

</nav>
<div class=" container-fluid alert alert-danger  w-100" role="alert">
    <strong>O website Sumburero ainda esta em desenvolvimento</strong>
</div>
</div>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Navegação</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="offcanvas-item @if (request()->routeIs('welcome')) active @endif">
                <a class="offcanvas-link " aria-current="page" href="{{ route('welcome') }}">Início</a>
            </li>
            <li class="offcanvas-item">
                <a class="offcanvas-link" href="#">Actividades</a>
            </li>
            <li class="offcanvas-item">
                <a class="offcanvas-link" href="#">Sobre nós</a>
            </li>
            <li class="offcanvas-item @if (request()->routeIs('contact')) active @endif">
                <a class="offcanvas-link  "  href="{{ route('contact') }}">Contacte -nos</a>
            </li>
        </ul>
    </div>
</div>



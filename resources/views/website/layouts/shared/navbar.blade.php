
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top sh">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Sumburero') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Actividades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ">Contacte -nos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger rounded-3 px-5" style="padding: 4px;color:white">Website ainda em desenvolvimento</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Navegação</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Actividades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre nós</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ">Contacte -nos</a>
            </li>
        </ul>
    </div>
</div>

<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Search</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

    </div>
</div>

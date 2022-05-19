<li class="sidebar-item @if (request()->routeIs('dashboard')) active @endif">
    <a class="sidebar-link " href="{{ route('dashboard') }}">
        @svg('radix-dashboard' ,'feather align-middle')<span class="align-middle">Administração</span>
    </a>
</li>
<li class="sidebar-item @if (request()->routeIs('user.*')) active @endif">
    <a class="sidebar-link " href="{{ route('user.index') }}">
        <i class="align-middle" data-feather="users"></i>
        <span class="align-middle">usuários</span>
    </a>
</li>
<li class="sidebar-item @if (request()->routeIs('category.*')) active @endif">
    <a class="sidebar-link " href="{{ route('category.index') }}">
        <i class="align-middle" data-feather="layers"></i>
        <span class="align-middle">Categorias</span>
    </a>
</li>
<li class="sidebar-item @if (request()->routeIs('category.*')) active @endif">
    <a class="sidebar-link " href="{{ route('category.index') }}">
        @svg('fluentui-draw-image-20-o','feather ')
        {{-- <i class="align-middle" data-feather="posts"></i> --}}
        <span class="align-middle">Actividades</span>
    </a>
</li>

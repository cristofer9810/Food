<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <style>
        .activo {
            color: white;
            font-weight: bold;
            background: #be372d;
        }

    </style>
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('inicio/img/food logo.png') }}" alt="" / height="55px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
            aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars-rs-food">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('welcome') ? 'activo' : '' }}"
                        href="/">Inicio</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('food.menu') ? 'activo' : '' }}"
                        href="{{ route('food.menu') }}">Menu</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('food.about') ? 'activo' : '' }}"
                        href="{{ route('food.about') }}">Acerca</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Más
                        de</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-a">
                        <a class="dropdown-item {{ request()->routeIs('food.reservation') ? 'activo' : '' }}"
                            href="{{ route('food.reservation') }}">Reservacion</a>
                        <a class="dropdown-item {{ request()->routeIs('food.stuff') ? 'activo' : '' }}"
                            href="{{ route('food.stuff') }}">Stuff</a>
                        <a class="dropdown-item {{ request()->routeIs('food.gallery') ? 'activo' : '' }}"
                            href="{{ route('food.gallery') }}">Galeria</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-a">
                        <div class="dropdown-divider"></div>
                        <button class="dropdown-item disabled"><b>▼ ▼ nuestro blog ▼ ▼</b></button>
                        <a class="dropdown-item {{ request()->routeIs('food.blog') ? 'activo' : '' }}"
                            href="{{ route('food.blog') }}">blog</a>
                        <div class="dropdown-divider"></div>
                        <button class="dropdown-item disabled"><b>▼ ▼ categorias ▼ ▼</b></button>
                        <div class="dropdown-divider"></div>
                        @foreach ($categories as $category)
                            <a class="dropdown-item"
                                href="{{ route('food.category', $category) }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item"><a
                        class="nav-link {{ request()->routeIs('food.contact') ? 'activo' : '' }}"
                        href="{{ route('food.contact') }}">Contactanos</a></li>
            </ul>


        </div>
    </div>
    @auth
        <!-- Profile dropdown -->
        <div class="relative ml-3">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    {{-- aqui esta para ingresar la imagen de perfil de nuestro sistema en la BD --}}
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"
                        style="background: #f8f9fa;"><img class="rounded-circle bac-fondo"
                            src="{{ auth()->user()->profile_photo_url }}" alt=""></a>

                    <div class="dropdown-menu" aria-labelledby="dropdown-a">

                        <a href="{{ route('profile.show') }}" class="dropdown-item" role="menuitem" tabindex="-1"
                            id="user-menu-item-0">Tu perfil</a>
                        <a href="{{ route('admin.home') }}" class="dropdown-item" role="menuitem" tabindex="-1"
                            id="user-menu-item-0">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="dropdown-item" role="menuitem"
                                tabindex="-1" id="user-menu-item-2" onclick="event.preventDefault();
                              this.closest('form').submit();">Cerrar sesión</a>
                        </form>
                </li>
            </ul>
        </div>
    @else
        <div id="navbars-rs-food">
            {{-- en este apartado esta la configuracion de botones para ingresar y registrarse en el sistema --}}

            <a href="{{ route('login') }}" class="btn btn-lg btn-circle btn-outline-new-white">Iniciar sesion</a>


            <a href="{{ route('register') }}" class="btn btn-lg btn-circle btn-outline-new-white">Registrarse</a>
        </div>

    @endauth

</nav>

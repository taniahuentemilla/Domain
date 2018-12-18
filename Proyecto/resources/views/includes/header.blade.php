<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('inicio')}}">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @if(session()->get('email'))
                <li class="nav-item">
                    <a href="{{ url('/home') }}" class="nav-link">Home</a>
                </li>
                @switch(session()->get('permiso'))
                    @case('admin')
                        <li class="nav-item">
                            <a href="#" class="nav-link">Administrar</a>
                        </li>
                        @break

                    @case('moderador')
                        <li class="nav-item">
                            <a href="#" class="nav-link">Moderar</a>
                        </li>
                        @break

                    @default<!-- perfil de usuario por defecto -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">Perfil</a>
                        </li>
                @endswitch
            @else
                <li class="nav-item">
                    <a class="nav-link" href="Tutoria">Tutorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="inscripcion">Inscripción</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Acceder</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('registro') }}" class="nav-link">Registro</a>
                    </li>
                @endif
            @endif
            <li class="nav-item">
                <a href="{{ route('livestream') }}" class="nav-link">Livestream</a>
            </li>
        </ul>
    </div>
</nav>
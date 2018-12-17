<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body{
                background-color:#00CED1;
            }
            header{
                background-color:#00CED1;
                margin-top: 0px;
            }
            .titulo{
                margin-left: 500px;
                
            }
        </style>
        <title>Domain</title>
        <link rel= "stylesheet" type= "text/css" href="css/estilos.css">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div class="titulo">Colegio de Ayudantes</div>

        <header id="main-header">
        
        <a id="logo-header" href="#">

            <p class="aviso">   Domain         ¿Quienes somos?       Ir a UCTemuco  </p>
 
		</header><!-- / #main-header -->




        <div class="flex-center position-ref full-height">
            
                <div class="top-right links">
                    @if(session()->get('email'))
                        <a href="{{ url('/home') }}">Home</a>
						<!-- Se condiciona que mostrar en base al permiso -->
						@switch(session()->get('permiso'))
							@case('admin')
								<a href="#">Administrar</a>
								@break

							@case('moderador')
								<a href="#">Moderar</a>
								@break

							@default <!-- perfil de usuario por defecto -->
								<a href="#">Perfil</a>
						@endswitch
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('registro') }}">Registro</a>
                        @endif
						
                    @endif
					<a href="{{ route('livestream') }}">Livestream</a>
                </div>
				@yield('content')
            

            
        </div>
		    
		<footer> Derechos reservado | Domain- Aprendizaje Profundo</footer>
    </body>
</html>

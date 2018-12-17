<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/archivoschat/css/bootstrap.min.css">
              <link rel="stylesheet" type="text/css" href="css/archivoschat/css/index.css">
              <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/css/navoverlay.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/css/index.css">
              <script src="js/bootstrap.min.js"></script>
              <script src="js/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body{
                background-color:#00CED1;
                background-image: url(css/imagenes/uno.jpg);
                background-attachment: fixed; 
                background-repeat: no-repeat;
                background-size: 100%;
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
                        <a href="Tutoria">Tutoria</a>
                        <a href="inscripcion">Inscripcion</a>
                        <a href="{{ route('login') }}">Login</a>


                        @if (Route::has('register'))
                            <a href="{{ route('registro') }}">Registro</a>
                        @endif
						
                    @endif
					<a href="{{ route('livestream') }}">Livestream</a>
                </div>
				@yield('content')

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="css/imagenes/Domain2.png" alt="Bienvenido">
    </div>

    <div class="item">
      <img src="css/imagenes/logo_horizontal.png" alt="Logo">
    </div>

    <div class="item">
      <img src="css/imagenes/Domain2.png" alt="Bienvenido">
    </div>

    <div class="item">
      <img src="css/imagenes/logo_horizontal.png" alt="Logo">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

            

            
        </div>
        <footer>
            <div style="vertical-align: middle">
                <img src="css/imagenes/Footer-institucional.png" align="center" valign="center">
          </div>
        </footer>
        

        
    </body>
</html>
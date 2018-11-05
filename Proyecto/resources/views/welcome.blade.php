<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel= "stylesheet" type= "text/css" href="css/estilos.css">
        
    </head>
    <footer> Derechos reservado | Domain- Aprendizaje Profundo</footer>
    <body>

     <div id="footer">
       
     </div> 

        <header id="main-header">
        
        <a id="logo-header" href="#">

            <p class="aviso">   Domain         ¿Quienes somos?       Ir a UCTemuco  </p>
 
    </header><!-- / #main-header -->




        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
        </div>
    </body>
</html>

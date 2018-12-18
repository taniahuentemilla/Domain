<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="css/archivoschat/css/bootstrap.min.css">
            <!-- <link rel="stylesheet" type="text/css" href="css/archivoschat/css/index.css"> -->
            <!-- <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap/css/navoverlay.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/index.css"> -->
            <!--  <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery-3.3.1.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  -->
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
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 85px;
            line-height: 60px;
            background-color: #f5f5f5;
        }
        .bg-transparent-1 {
            background-color: #0000004f!important;
        }
    </style>
    <title>Domain</title>
    <!--  <link rel= "stylesheet" type= "text/css" href="css/estilos.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
        
</head>
<body>

    @include('includes.header')
    
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto mt-5">
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="footer mb-0">
      <div class="container-fluid pr-0 pl-0">
         <img src="css/imagenes/Footer-institucional.png" class="img-fluid w-100 " align="center" valign="center">
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
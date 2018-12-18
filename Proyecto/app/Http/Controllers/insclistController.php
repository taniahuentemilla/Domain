<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class insclistController extends Controller
{
    public function insclist()
    {
     ?>
     	<link href="css/Restaurante/css/bootstrap.css" rel="stylesheet">
        <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/Comment.js"></script>
      <script src="js/index.js"></script>
     <body style="background-image:url(css/imagenes/uno.jpg);background-attachment:fixed;background-repeat:no-repeat;
     background-size:100%;"> 
      <div class="container" style="padding-top:80px; "> 
      <div class="jumbroton myBackground" style="background:rgba(255,255,255,.7);width:75%;height:75%;position:absolute;top;10%;left:15%; text-align:middle;"><br>
      <div style="top:15%;left:20%;text-align:center" class="form-group">
             <h1>Tu curso ha sido inscrito correctamente se te informará por correo tu horario y el dia de presentación</h1>       <br>
             <h3>Gracias por trabajar con nosotros!</h3>
            <br>
      <button action="form-control" style="left:40%; higth:50% ;" onclick="location.href=''"class="
      btn btn-primary">Volver al Inicio</button>                                                                                                             <br> <br>
             
           
            
      </div>
    </div>		
</div>

</body>		

<?php  
	}
}

	
?>
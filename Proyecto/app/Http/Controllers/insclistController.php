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
      <div class="container" style="padding-top:50px; "> 
      <div class="jumbroton myBackground" style="background:rgba(255,255,255,.7);width:80%;height:80%;position:absolute;top;10%;left:10%;">
      <div style="position:absolute;top:15%;left:20%;text-align:center" class="form-group">
             <h1 >Tu curso ha sido inscrito correctamente se te informará por correo tu horario y el dia de presentación<h1/>
             <h3>Gracias por trabajar con nosotros<h3/>
            <br>
           
            
      </div>
    </div>		
</div>

</body>		

<?php  
	}
}

	
?>
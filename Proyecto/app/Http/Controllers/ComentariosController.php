<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function Comentarios()
    {
     ?>
     		<link href="css/Restaurante/css/bootstrap.css" rel="stylesheet">
        <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/Comment.js"></script>
	
			<div class="container" > 
		<div  class="jumbotron myBackground">
        <h3 class="whitney">Dejanos tus comentarios</h3>
        <label for="exampleInputEmail1">Usuario</label>
        <input type="text" class="form-control" placeholder="Usuario"name="usuario">
        <label for="exampleInputEmail1">Comentario</label>
        <textarea id="mensaje" placeholder="Mensaje" class="form-control" name="mensaje"></textarea>
        <button id="boton" class="btn btn-success" onclick="escribir2()">Enviar</button>
          

        <h2>COMENTARIOS</h2>
        <div id="contenidoInput" name="contenidoInput">
            <?php 

                  $dist = file('Datos.json');
                  $largo=count($dist);
                  $str_datos = file_get_contents("datos.json");
                  for($i=0;$i < $largo;$i++){
                  $linea=$dist[$i];
                  $datos = json_decode($linea,true);
                  echo  " <div class=''>                
                              <div class='row'>             
                                  <div class='col-sm-1' >       
                                      <div class='thumbnail'>
                                          <img class='img-responsive user-photo' src='css/Restaurante/css/imagenes/User.png'>
                                      </div>
                                  </div>
                                  <div class='col-sm-5'style='width:700px;'> 
                                      <div class='panel panel-default'>
                                          <div class='panel-heading'style='background-color:#DADADA'>
                                              <strong>".$datos["nombre"]."</strong> <span class='text-muted'>commented 5 days ago</span>
                                          </div>
                                          <div class='panel-body'style=background-color:white>"
                                              .$datos["comentario"]."
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <br>";
                  }

            ?>



        </div>
    </div>
</div>
		

<?php  
	}
}

	
?>
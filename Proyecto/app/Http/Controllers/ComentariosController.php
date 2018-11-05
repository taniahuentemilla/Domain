<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function Comentarios()
    {
     ?>
     		<link href="css/Restaurante/css/bootstrap.css" rel="stylesheet">
	
			<div class="container" > 
		<div  class="jumbotron myBackground">
        <h3 class="whitney">Dejanos tus comentarios</h3>
        <form action="" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Usuario</label>
            <input name="usuario"type="text" class="form-control" id="Nombre" placeholder="Nombre">
          </div>
          <label for="exampleInputEmail1">Comentario</label>
          <textarea name="comentario" style="width: 700px; height: 100px;" class="form-control" rows="3"></textarea>
          <br><input type="submit" name="enviar" value="enviar comentario" class="btn btn-success">
        </form>

        <h2>COMENTARIOS</h2>
        <?php 
        	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$database = "comentarios";

	$conexion = mysqli_connect($servidor, $usuario, $password)or die(mysqli_error($conexion));
	mysqli_select_db($conexion, $database)or die(mysqli_error($conexion));
	$consulta = mysqli_query($conexion, "SELECT * FROM comentarios")or die(mysqli_error($conexion));
              while($row = mysqli_fetch_assoc($consulta)){
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
                            <strong>".$row['usuario']."</strong> <span class='text-muted'>commented 5 days ago</span>
                      </div>
                      <div class='panel-body'style=background-color:white>"
                            .$row['comentario']."
                      </div>
                      </div>
                      </div>
                      </div>
                      <br>";
          }
        
        
          if(isset($_POST['enviar'])){
              $usuario =utf8_decode(mysqli_real_escape_string($conexion,$_POST['usuario']));
              $comentario =utf8_decode(mysqli_real_escape_string($conexion,$_POST['comentario']));
              if($usuario =='' or $comentario ==''){
                  echo "porfavor rellene el campo faltante";
              }
              else{
                $insertar =mysqli_query($conexion, "INSERT INTO comentarios(usuario,comentario) VALUES('".$usuario."','".$comentario."')")or die(mysqli_error($conexion));

                

              }
              $comentario2=$_POST['comentario'];
              $consulta = mysqli_query($conexion, "SELECT * FROM comentarios WHERE comentario='".$comentario2."'")or die(mysqli_error($conexion));
              while($row = mysqli_fetch_assoc($consulta)){
                echo  " <div class=''>
                        <div class='row'>
                        <div class='col-sm-1' >
                        <div class='thumbnail'>
                            <img class='img-responsive user-photo' src='css/imagenes/User.png'>
                        </div>
                        </div>
                      <div class='col-sm-5'style='width:700px;'>
                      <div class='panel panel-default'>
                      <div class='panel-heading'style='background-color:#DADADA'>
                            <strong>".$row['usuario']."</strong> <span class='text-muted'>commented 5 days ago</span>
                      </div>
                      <div class='panel-body'style=background-color:white>"
                            .$row['comentario']."
                      </div>
                      </div>
                      </div>
                      </div>
                      <br>";
          }
          }
        ?>
    </div>
</div>
		

<?php  
	}
}

	
?>
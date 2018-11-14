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
        <?php 							     //variables para conexion a mysql
        	$servidor = "localhost";         //conexion al servidor
	        $usuario = "root";						 //usuario root
	        $password = "";							 //si contraseña
	        $database = "comentarios";				 //base de datos especificada 

	        $conexion = mysqli_connect($servidor, $usuario, $password)or die(mysqli_error($conexion)); // variable de conexion con las variables antes especificadas , si no puede con la conexion envia error
	        mysqli_select_db($conexion, $database)or die(mysqli_error($conexion));  // seleccion la base de datos en la variable, si no puede manda error
	        $consulta = mysqli_query($conexion, "SELECT * FROM comentarios")or die(mysqli_error($conexion));  //ejecuta la consulta y solicita todos los datos disponibles en la base de datos si no envia error
              while($row = mysqli_fetch_assoc($consulta)){ //guarda los datos retornados en la variable row
              	//devolvera esta estructura html por cada fila que devulva la consulta
              	//todos los divs menos el primero estas definidos con clases para tomar el css del bootstrap
              	//de los datos contenidos en el row mostrara en un <Strong> el usuario
              	//de los datos contenidos en el row mostrara dentro de un div el comentario
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
        
        
          if(isset($_POST['enviar'])){      //si se presiona este el boton del formulario "enviar" se ejecutara lo siguiente
              // mysqli_real_escape_string escapa los caracteres especiales de una cadena para usarla en una sentencia SQL
              $usuario =utf8_decode(mysqli_real_escape_string($conexion,$_POST['usuario'])); //guarda en variable usuario el contenido del campo "usuario" para luego usarlo en una sentencia SQL
              $comentario =utf8_decode(mysqli_real_escape_string($conexion,$_POST['comentario'])); //guarda en variable comentario el contenido del campo "usuario" para luego usarlo en una sentencia SQL
              if($usuario =='' or $comentario ==''){   //si el campo usuario o comentario esta vacio, le pedira al User que rellene el campo faltante
                  echo "porfavor rellene el campo faltante";
              }
              else{  // de lo contrario si los dos campos tienen sus datos, los insertara en la base de datos
                $insertar =mysqli_query($conexion, "INSERT INTO comentarios(usuario,comentario) VALUES('".$usuario."','".$comentario."')")or die(mysqli_error($conexion));

                

              }
              // esto es para mostrar al instante en la pagina web el campo insertado en la sentencia de arriba 
              // porque hace una solicitud de datos dentro de la estructura definida con la condicion de que los datos que se van a mostrar sean iguales a lo que habia en el campo "comentario"
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
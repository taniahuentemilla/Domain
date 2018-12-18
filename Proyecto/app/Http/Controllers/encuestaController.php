<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class encuestaController extends Controller
{
	public function index ():
		require('conexion.php');
		$sql = "SELECT * FROM encuestas ORDER BY id DESC";
		$req = mysqli_query($conexion, $sql);
		?>
			<title>Sistema de encuestas</title>
			//<link rel="stylesheet" href="estilos.css">
		    <div class="wrap">
		    	<h1>Encuestas</h1>
		    	<ul class="votacion index">
				<?php
					while($result = mysqli_fetch_object($req)){
						echo '<li><a href="encuesta.php?id='.$result->id.'">'.$result->titulo.'</a></li>';
					}
				?>
				</ul>
		    	<a href="agregar.php">+ Agregar nueva encuesta</a>
			</div>

		<?php 


}
	public function encuesta ():
		<?php
		require('conexion.php');
		        $id = $_GET['id'];
			if(!isset($_GET['id'])){
				header('location: index.php');
			}

			if(isset($_POST['votar']))
			{

				if(isset($_POST['valor'])){
					$opciones = $_POST['valor'];
					$mod = mysqli_query("SELECT * FROM opciones WHERE id = ".$opciones);
					while($result = mysqli_fetch_object($mod)){
						$valor = $result->valor + 1; // obtenemos el valor de 'valor' y le añadimos 1 unidad
						mysqli_query("UPDATE opciones SET valor =  '".$valor."' WHERE id = ".$opciones); // luego ejecutamos el query SQL
					}
					header('location: resultado.php?id='.$id); // Por ultimo lo redireccionamos a la encuestas mostrando los resultados.
		}
	}

	function encuesta2(){
		?>

		<FORM action = "respuestas.php" METHOD ="post">
		1. ¿cómo encuentras que ha sido el desempeño del tutor a lo largo del semestre? <br/>
		<input type = "radio" NAME = "" value = "muy bueno " />  <br />
		<input type = "radio" NAME = "" value = "bueno" /> <br />
		<input type = "radio" NAME = "" value= "deficiente" /> <br />
		<input type = "radio" NAME = "" value= "malo" /> <br />
		<input type = "radio" NAME = "" value= "muy malo" /> <br />
		<br /><br />

		2. •	¿Te gustaría que volviera a ser tutor en algún ramo más adelante?<br/>
		<INPUT TYPE="radio" VALUE="si " NAME="si "> 3<br />
		<INPUT TYPE="radio" VALUE="no" NAME="no"> 4<br />
		<INPUT TYPE="radio" VALUE="tal vez" NAME="tal vez"> <br />

		<br /><br />
		3.•	¿Sientes que haz obtenido un aprendizaje que antes no había logrado?<br />
		<INPUT TYPE="radio" VALUE="si " NAME=""><br />
		<INPUT TYPE="radio" VALUE="no" NAME="">  <br />
		<INPUT TYPE="radio" VALUE="un poco" NAME=""> <br />
		
			<br /><br />

		2. •	¿El modo de enseñar del tutor te acomoda?, <br/>
		<INPUT TYPE="radio" VALUE="si " NAME="suma"><br />
		<INPUT TYPE="radio" VALUE="no " NAME="suma"><br />
		<INPUT TYPE="radio" VALUE="a veces" NAME="suma"> <br />

		<br /><br />

			<br /><br />

		2. •	¿Te costó poder entenderle al tutor la materia?<br/>
		<INPUT TYPE="radio" VALUE="si" NAME="suma">3<br />
		<INPUT TYPE="radio" VALUE="no" NAME="suma"><br />
		<INPUT TYPE="radio" VALUE="a veces" NAME="suma"> <br />

		<br /><br />


			<br /><br />

		2. •	¿cumplia el tutor con los horarios?<br/>
		<INPUT TYPE="radio" VALUE="siempre" NAME="suma"><br />
		<INPUT TYPE="radio" VALUE="nunca" NAME="suma"> <br />
		<INPUT TYPE="radio" VALUE="a veces" NAME="suma"> <br />

		<br /><br />


			<br /><br />

		2. •	¿era el tutor objetivo en cuanto a la información que entregaba?<br/>
		<INPUT TYPE="radio" VALUE="si" NAME=""><br />
		<INPUT TYPE="radio" VALUE="no" NAME=""><br />
		<INPUT TYPE="radio" VALUE="a veces" NAME=""> <br />

		<br /><br />
		<input type="submit" value="validar" name="validar">
		</form> 
<?php
	}

}

?>

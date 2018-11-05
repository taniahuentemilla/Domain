<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login_modController extends Controller
{
	public function login()
	{
	
		?>
		<h1>Login Moderadores</h1>
		<form id="login" action="index_mod.php" method="post" autocomplete="off">
		    <p><label >Usuario:</label></p>
		    <input name="usuario" type="text" id="usuario" placeholder="Ingresa Usuario" autofocus="" required=""></p>

		    <p><label>Contraseña:</label></p>
		    <input name="contraseña" type="password" id="contraseña" placeholder="Ingresa Password" required=""></p>
		 
		    <p><input type="submit" name="submit" value="Ingresar" class="boton"></p>
		</form>

		<a href="registro.php"</a>Registrarse</a>

    	
<?php  
	}
}
?>
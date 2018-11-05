<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function cursos()
    {
     ?>
     		<link rel="stylesheet" href="css/archivoschat/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/archivoschat/css/index.css">
			<script src="css/archivoschat/js/jquery-3.3.1.min.js"></script>
			<script src="css/archivoschat/js/bootstrap.min.js"></script>
			<script src="index.js"></script>
	


		<div id="contenedor">
			<h1>Chat curso programacion II</h1>
			<div id="conversaciones"></div>
			<input type="text" class="form-control" placeholder="Usuario">
			<textarea id="mensaje" placeholder="Mensaje" class="form-control"></textarea>
			<button id="boton" class="btn btn-success" onclick="escribir()">Enviar</button>
		</div>
		

<?php  
	}
}
	
?>
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
			<script src="css/archivoschat/js/bootstrap.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery-3.3.1.min.js"></script>
			<script src="js/index.js"></script>

<script>
$(document).ready(function() {
  $("#ocultar").click(function() {
    $("#contenedor").hide();
    $("#mostrar").show();
  });
  $("#mostrar").click(function() {
    $("#contenedor").show();
    $("#mostrar").hide();

  });

});

</script>
</head>
<body>
<button id="mostrar" class="btn btn-success"name="Chat" >Chat</button>
<div id="contenedor"name="contenedor">
	<button id="ocultar" class="btn btn-success"name="ocultar">ocultar</button>
	<h1>Chat curso programacion II</h1>
	<div id="conversaciones"></div>
	<form action="leer.php" method="post"></form>
	<input type="text" class="form-control" placeholder="Usuario"name="usuario">
	<textarea id="mensaje" placeholder="Mensaje" class="form-control" name="mensaje"></textarea>
	<button id="boton" class="btn btn-success" onclick="escribir()">Enviar</button>
</div>

		

<?php  
	}
}
	
?>
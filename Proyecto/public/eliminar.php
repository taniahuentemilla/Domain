<?php 

	$var = $_POST['borrar'];
	unlink("Material_de_Apoyo/$var");
	header('Location: Tutoria');
?>
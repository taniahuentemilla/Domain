<?php
	$mensaje = "<b>".$_POST['usuario']."</b>"."dice: ".$_POST['mensaje']."<br>"; //en la variable mensaje almacenara los datos 
	//escritos en los campos "mensaje" y "usuario" ademas de agregarle etiquetas html para agregar negrita y salto de linea 
	//al momento de visualizar en el navegador web
	$file = fopen("chat.txt", "a"); // abre el fichero en modo añadir texto("a")
	fwrite($file, $mensaje . PHP_EOL); //escribe en el archivo // el contenido de la variable mensaje // y agrega salto de linea al texto
	fclose($file); //cierra el archivo abierto en la variable $file
	

?>
<?php
	$dist = file('inscripcion.json');
	$codificado = array('curso'=>$_POST['select1'],'tutor'=>$_POST['select2']);
	$write = json_encode($codificado);
	//escritos en los campos "mensaje" y "usuario" ademas de agregarle etiquetas html para agregar negrita y salto de linea 
	//al momento de visualizar en el navegador web

	$file = fopen("inscripcion.json", "a"); // abre el fichero en modo añadir texto("a")
	fwrite($file, $write. PHP_EOL); //escribe en el archivo // el contenido de la variable mensaje // y agrega salto de linea al texto
	fclose($file); //cierra el archivo abierto en la variable $file
	header('Location: insclist')

?>
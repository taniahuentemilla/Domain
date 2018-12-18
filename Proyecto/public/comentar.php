<?php
	$dist = file('Datos.json'); //transfiere el fichero completo a un array contenido en $dist
    $largo=count($dist)-1;      //cuenta el largo del archivo y le resta 1
	$codificado = array('nombre'=>$_POST['nombre'],'comentario'=>$_POST['comentario']); 
	// los campos nombre y comentario obtenidos atraves del POST se añaden a un array
	// para luego codificarlo en formato JSON con la funcion json-encode()
	$write = json_encode($codificado);
	//almacena en una variable, lo que se va a escribir

	$file = fopen("Datos.json", "a"); // abre el fichero en modo añadir texto("a") 
	fwrite($file, $write. PHP_EOL); //escribe en el archivo // el contenido de la variable mensaje // y agrega salto de linea al texto
	fclose($file); //cierra el archivo abierto en la variable $file
	fclose($dist); //cierra el archivo abierto en la variable $dist
	header('Location: Tutoria'); //redirige a Tutoria despues de ejecutar todo el codigo

?>
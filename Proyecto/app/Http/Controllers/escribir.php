<?php
	$file = file_get_contents("chat.txt");     // lee el contenido en el txt
	$mensaje = "<b>".$_POST['usuario']."</b>"."dice: ".$_POST['mensaje']."<br>"; //los datos recibidos por el js los mostrara
	//con una estructura html
	$file =file_put_contents("chat.txt", $file.$mensaje);  //inserta el contenido de la variable mensaje en el txt
?>
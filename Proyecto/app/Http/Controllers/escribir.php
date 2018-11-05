<?php
	$file = file_get_contents("chat.txt");
	$mensaje = "<b>".$_POST['usuario']."</b>"."dice: ".$_POST['mensaje']."<br>";
	$file =file_put_contents("chat.txt", $file.$mensaje);
?>
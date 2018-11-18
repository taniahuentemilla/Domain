<?php
	$mensaje = "<b>".$_POST['usuario']."</b>"."dice: ".$_POST['mensaje']."<br>"; //los datos recibidos por el js los 
	$file = fopen("chat.txt", "a");
	fwrite($file, $mensaje . PHP_EOL);
	fclose($file);
?>
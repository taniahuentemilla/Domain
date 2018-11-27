<?php
$file = file("chat.txt");
for ($i = max(0, count($file)-50); $i < count($file); $i++) { // en counter almacena el numero total de lineas -50
															  // entonces si i=500 por ejemplo y menor a 550= total de lineas
  	                                                          // si eso es verdadero	
  echo $file[$i] . "\n";									  // mostrara del 501 hasta la linea 550 concatenando salto de linea
}
?>
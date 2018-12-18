<?php
                  $formatos   = array('.jpg', '.png', '.pdf','.doc','.docs','.xlsx'); //extenciones permitidas dentro de array
                  $directorio = 'Material_de_Apoyo';                                  //se especifica el directorio a usar
                  $nombreArchivo    = $_FILES['archivo']['name'];      //$FILES es un arreglo bidimencional que contendra las especificaciones del archivo, entonces se le indica que de la dimension "archivo" me de la dimension "nombre"
                  $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];      //nombre temporal
                  $ext              = substr($nombreArchivo, strrpos($nombreArchivo, '.')); 
      //extrae una cadena de texto de variable $nombreArchivo   strrpos le decimos de que posicion quiero que extraiga (despues del punto)
                  if (in_array($ext, $formatos)){  //verifico que si lo que esta en ext(extencion) existe en mi array de extenciones $formatos
                      if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){ // si se pudo subir el archivo
                            echo "Archivo Subido";                                              // imprima mensaje
                      }else{                                                                    // si no imprima mensaje de error
                          echo 'ERROR intente nuevamente';
                      }      
                  }else{                                                                        // si es que la extencion no existe en el array
                  echo 'ERROR archivo no permitido comuniquese con el administrador';           //imprime mensaje de error
    }
    header('Location: Tutoria');                                                                //despues de finalizado redirige a TUTORIA
    
  
?>
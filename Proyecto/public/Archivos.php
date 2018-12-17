<?php
                  $formatos   = array('.jpg', '.png', '.pdf','.doc','.docs','.xlsx');
                  $directorio = 'Material_de_Apoyo'; 
                  $nombreArchivo    = $_FILES['archivo']['name'];
                  $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
                  $ext              = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
                  if (in_array($ext, $formatos)){
                      if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
                            echo "Archivo Subido";
                      }else{
                          echo 'ERROR intente nuevamente';
                      }      
                  }else{
                  echo 'ERROR archivo no permitido comuniquese con el administrador';
    }
    header('Location: Tutoria');
  
  
?>
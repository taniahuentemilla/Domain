<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class archivoController extends Controller
{
    public function archivo()
    {
     ?>
     	<link href="css/Restaurante/css/bootstrap.css" rel="stylesheet">
        <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/Comment.js"></script>
      <script src="js/index.js"></script>
     <body style="background-image:url(css/imagenes/uno.jpg);background-attachment:fixed;background-repeat:no-repeat;
     background-size:100%;"> 
      <div class="container" style="padding-top:50px; "> 
      <div class="jumbroton myBackground" style="background:rgba(255,255,255,.7);width:80%;height:80%;position:absolute;top;10%;left:10%;">
      <div style="position:absolute;top:15%;left:20%;text-align:center" class="form-group">
             <?php
                  $formatos   = array('.jpg', '.png', '.pdf','.doc','.docs','.xlsx');
                  $directorio = 'Material_de_Apoyo'; 
                  if (isset($_POST['boton'])){
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
  }
  
?>

<?php  
	}
}

	
?>
<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class inscripcionController extends Controller
{
    public function inscripcion()
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
             <h1>Bienvenido a la Inscripcion de tutorias <h1/>
             <h1>Ingenieria Civil Informatica <h1/>
            <br>
            <select class="form-control"style="position:absolute;left:27%;" id="select1">
                <?php $str_datos = file_get_contents("tutorias.json");
                      $datos = json_decode($str_datos,true);
                      for($i=0;$i<count($datos["Datos"]["Cursos"]);$i++){
                      echo "<option value=".$datos["Datos"]["Cursos"][$i].'">'.$datos["Datos"]["Cursos"][$i]."</option>";
                      }
                ?>
            </select>
            <br>
            <br>
            <select class="form-control"style="position:absolute;left:27%;"id="select2">
                 <?php $str_datos = file_get_contents("tutorias.json");
                      $datos = json_decode($str_datos,true);
                      for($i=0;$i<count($datos["Datos"]["Tutores"]);$i++){
                      echo "<option value=".$datos["Datos"]["Tutores"][$i].'">'.$datos["Datos"]["Tutores"][$i]."</option>";
                      }
                ?>
              </select>
           
            <form action="form-control" style="position:absolute;left:27%;">
            Seleccione su horario:<br />
            <input type="file" name="archivo_foto"><br>
            </form>
          
            <br><button onclick="location.href=''"class=" btn btn-primary" onclick="inscribir()">Inscribir</button>
           

            
            
      </div>
    </div>		
</div>


</body>		

<?php  
	}
}

	
?>
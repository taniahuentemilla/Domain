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
      <div class="jumbroton myBackground" style="background:rgba(255,255,255,.7);width:70%;height:80%;position:absolute;top;0%;left:18%;">
      
      <a href="http://127.0.0.1:8000/inscripcion" style="position:absolute;left:-21% ; color:blue";>Calendario </a><br><br>
      <a href="http://127.0.0.1:8000/inscripcion" style="position:absolute;left:-21% ; color:blue" >Información Académica  </a><br><br>
      <a href="http://127.0.0.1:8000/inscripcion" style="position:absolute;left:-21% ; color:blue" >Ver mi Pefil </a> <br><br>
      <a href="http://127.0.0.1:8000/inscripcion" style="position:absolute;left:-21% ; color:blue">Soporte y Administración </a> <br><br>
      <a href="http://127.0.0.1:8000/inscripcion" style="position:absolute;left:-21% ; color:blue" >Ayuda</a> <br><br>
      
      <div style="position:absolute;top:1%;left:15%;text-align:center" class="form-group">
             <h1>Bienvenido a Aprendizaje Profundo <h1/>
             <h1>Ingeniería Cívil en Informática <h1/>
            <br>
            <h5>Registro de ingreso:</h5>
            <input type="text" name="nombredelacaja" style="position:absolute;left:27%">
                 
            <br><br>
            <form method="POST" action="Inscribir.php">
            <select class="form-control"style="position:absolute;left:27%;" name="select1"> 
                <?php $str_datos = file_get_contents("tutorias.json");   //selecciona json de que contiene las tutorias
                      $datos = json_decode($str_datos,true); // si el json tiene datos 
                      for($i=0;$i<count($datos["Datos"]["Cursos"]);$i++){ //recorre esos datos e indica del arreglo datos los cursos
                      echo "<option value=".$datos["Datos"]["Cursos"][$i].'">'.$datos["Datos"]["Cursos"][$i]."</option>";//imprime de datos
                      // los cursos disponibles
                      }
                ?>
            </select>
            <br>
            <br>
            <select class="form-control"style="position:absolute;left:27%;"name="select2">
                 <?php $str_datos = file_get_contents("tutorias.json");//selecciona json que contiene las tutorias
                      $datos = json_decode($str_datos,true);// si este cotiene archivos
                      for($i=0;$i<count($datos["Datos"]["Tutores"]);$i++){// recorre de el arreglo Datos todos los tutores disponibles 
                      echo "<option value=".$datos["Datos"]["Tutores"][$i].'">'.$datos["Datos"]["Tutores"][$i]."</option>";//muestra todos los
                      // tutores desde el arreglo datos
                      }
                ?>
              </select>
              <br><br>
              <div action="form-control" style="position:absolute;left:27%;">
            Seleccione su horario:<br />
            <input type="file" name="archivo_foto"><br>
            </div> 
              <br><br><br><button type="subtmit" style="position:left;" onclick="location.href='"class="
             btn btn-primary">Inscribir</button> 
              </form>
            <br>
                   
            <br><br><br>                            
                                                                                                                        <br> <br>
             
      </div>
    </div>		
</div>


</body>		

<?php  
	}
}

	
?>
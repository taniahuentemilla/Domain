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
      <a href="http://127.0.0.1:8000/inscripcion" style="position:absolute;left:-21% ; color:#FF0000" >Información Académica  </a><br><br>
      <a href="http://127.0.0.1:8000/inscripcion" style="position:absolute;left:-21% ; color:#FF0000" >Ver mi Pefil </a> <br><br>
      <a href="http://127.0.0.1:8000/inscripcion" style="position:absolute;left:-21% ; color:#FF0000">Soporte y Administración </a> <br><br>
      <a href="http://127.0.0.1:8000/inscripcion" style="position:absolute;left:-21% ; color:#FF0000" >Ayuda</a> <br><br>
      <iframe width="250" height="150" src="https://www.youtube.com/embed/VlfwdA2jGdE" style="position:absolute;left:85% " ></iframe>
      
   
      <div style="position:absolute;top:1%;left:15%;text-align:center" class="form-group">
             <h1>Bienvenido a Aprendizaje Profundo <h1/>
             <h1>Ingeniería Cívil en Informática <h1/>
            <br>
            <h5>Registro de ingreso:</h5>
            <input type="text" name="nombredelacaja" style="position:absolute;left:27%">
                 
            <br><br>
            <form method="POST" action="Inscribir.php">
            <select class="form-control"style="position:absolute;left:27%;" name="select1">
                <?php $str_datos = file_get_contents("tutorias.json");
                      $datos = json_decode($str_datos,true);
                      for($i=0;$i<count($datos["Datos"]["Cursos"]);$i++){
                      echo "<option value=".$datos["Datos"]["Cursos"][$i].'">'.$datos["Datos"]["Cursos"][$i]."</option>";
                      }
                ?>
            </select>
            <br>
            <br>
            <select class="form-control"style="position:absolute;left:27%;"name="select2">
                 <?php $str_datos = file_get_contents("tutorias.json");
                      $datos = json_decode($str_datos,true);
                      for($i=0;$i<count($datos["Datos"]["Tutores"]);$i++){
                      echo "<option value=".$datos["Datos"]["Tutores"][$i].'">'.$datos["Datos"]["Tutores"][$i]."</option>";
                      }
                ?>
              </select><br>
              <br>
              <br><button type="submit" style="left:40%; height:50% ;"class="
             btn btn-primary">Inscribir</button><br>
             </form>
              <div style="padding-left: 150px;">
             <form action="">
            <h5>seleccione su horario</h5><input type="file" name="archivo_foto">
            <br>
            </form>
            </div>
            
            <br><br>  
                    
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
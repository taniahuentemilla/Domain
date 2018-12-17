<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class tutoriaController extends Controller
{
    public function tutoria()
    {
     ?>
      <body style="background-image: url(css/imagenes/uno.jpg);background-attachment: fixed; background-repeat: no-repeat;background-size: 100%;">
     		<link rel="stylesheet" href="css/archivoschat/css/bootstrap.min.css">
			  <link rel="stylesheet" type="text/css" href="css/archivoschat/css/index.css">
			  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/css/navoverlay.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/css/index.css">
			  <script src="js/bootstrap.min.js"></script>
			  <script src="js/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/Comment.js"></script>
        <script src="js/index.js"></script>
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
        <script>
        $(document).ready(function () {
            $("#miModal").modal("show");
        });
    </script>

        <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding-top: 5%;">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: black">
      <div class="modal-header" style="background-color: black">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel" style="text-align: center;color:white;">Presentacion del Curso</h4>
      </div>
      <div class="modal-body">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/HrRkLOS3N2Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div id="contenedor"name="contenedor">
                <h3>Microcontroladores</h3><br>
                <div id="conversaciones">
                </div>
                <form action="Escribir.php" method="post"></form>
                <input type="text" class="form-control" placeholder="Usuario"name="usuario" required="">
                <textarea id="mensaje" placeholder="Mensaje" class="form-control" name="mensaje" required=""></textarea>
                <button id="boton" class="btn btn-success" onclick="escribir()">Enviar</button>
            </div>
        </div>
        <span style="font-size:30px;cursor:pointer; position: fixed;color: #39FF22"onclick="openNav()">&#9776; CHAT</span>




			  <div class="container" style="">
				    <nav style="margin-top: 40px;" class="navbar navbar-default" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                  data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Desplegar navegación</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><img src="css/imagenes/Logo_UCT.png" alt="logo" height="40px" width="40px"></a>
              </div>
              <div class="collapse navbar-collapse navbar-ex1-collapse">
                  <ul class="nav navbar-nav">
                    <li ><a href="http://127.0.0.1:8000">INICIO</a></li>
                    <li ><a href="inscribir">TUTORIAS</a></li>
                    <img style="padding-left: 100px;"src="css/imagenes/logo_horizontal.png" alt="logo" height="50px" width="350px">
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="login">Iniciar Sesion</a></li>
                    <li><a href="register">Registrarse</a></li>
                  </ul>
              </div>
            </nav>
          <div  class="jumbotron myBackground" style="background: rgba(255, 255, 255, .7);">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="css/imagenes/bienvenido.png" alt="Bienvenido">
    </div>

    <div class="item">
      <img src="css/imagenes/logo_horizontal.png" alt="Logo">
    </div>

    <div class="item">
      <img src="css/imagenes/bienvenido.png" alt="Bienvenido">
    </div>

    <div class="item">
      <img src="css/imagenes/logo_horizontal.png" alt="Logo">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                <br><div class="panel panel-default">
 
                    <div class="panel-heading">Descripcion del curso</div>
                        <div class="panel-body">
                            <p>En el curso de "Microcontroladores" conoceras todo lo relacionado con los PICS.
                                para ello utilizaremos el Pic16f84a ya que es un dispositivo facil y practico para la introduccion al tema. Esperamos que el curso sea de tu agrado y puedas ampliar tus conocimiento para que asi mas adelante puedas desarrolar tu propio y genial proyecto con microcontroladores ¡Neuronas a la Obra!.</p>
                        </div>

                    </div><br><br>


                    <br><br><div class="container">    
                       <div class="row">
                          <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Material de Apoyo</div>

                                <div class="panel-body">
                                      <?php 
                                        $directorio = 'Material_de_Apoyo';
                                        if ($dir = opendir($directorio)){
                                          while ($archivo =readdir($dir)) {
                                            echo "<a href=/Material_de_Apoyo/$archivo>$archivo</a><br>";
                                          }
                                        }
                                      ?>
                                </div>
                                <div class="panel-footer">
                                    <form method="POST" action="Archivos.php" enctype="multipart/form-data">
                                      <input type="file" name="archivo"><br>
                                      <button id="boton" class="btn btn-success">Enviar</button>
                                    </form>
                                </div>
                            </div>
                          </div>
                          <div class="col-sm-4"> 
                              <div class="panel panel-danger">
                                  <div class="panel-heading">Preguntas y Respuestas</div>
                                  <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                                  <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                              </div>
                          </div>
                          <div class="col-sm-4"> 
                              <div class="panel panel-success">
                                  <div class="panel-heading">Accede al Foro</div>
                                  <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                                  <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                              </div>
                          </div>
                       </div>
                    </div><br><br><br>

        <h3 class="whitney">Dejanos tus comentarios</h3>
        <label for="exampleInputEmail1">Usuario</label>
        <form action="comentar.php" method="post"> 
        <input type="text" class="form-control" placeholder="Usuario"name="nombre" style="width: 200px;" required>
        <label for="exampleInputEmail1">Comentario</label>
        <textarea id="mensaje" placeholder="Comentario" class="form-control" name="comentario" style="width: 500px;" required=""></textarea>
        <button  type="submit"id="boton" class="btn btn-success">Enviar</button>
        </form>

        <h2>COMENTARIOS</h2>
        <div id="contenidoInput" name="contenidoInput">
            <?php 

                  $dist = file('Datos.json');
                  $largo=count($dist);
                  $str_datos = file_get_contents("datos.json");
                  for($i=0;$i < $largo;$i++){
                  $linea=$dist[$i];
                  $datos = json_decode($linea,true);
                  echo  " <div class=''>                
                              <div class='row'>             
                                  <div class='col-sm-1' >       
                                      <div class='thumbnail'>
                                          <img class='img-responsive user-photo' src='css/Restaurante/css/imagenes/User.png'>
                                      </div>
                                  </div>
                                  <div class='col-sm-5'style='width:700px;'> 
                                      <div class='panel panel-default'>
                                          <div class='panel-heading'style='background-color:#DADADA'>
                                              <strong>".$datos["nombre"]."</strong> <span class='text-muted'>commented 5 days ago</span>
                                          </div>
                                          <div class='panel-body'style=background-color:white>"
                                              .$datos["comentario"]."
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <br>";
                  }

            ?>

            



        </div>
          </div>
          <div style="vertical-align: middle">
                <img src="css/imagenes/Footer-institucional.png" align="center" valign="center">
          </div>
			  </div>
      </body>
<?php  
	}
}
	
?>
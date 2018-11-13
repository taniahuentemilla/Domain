<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registro_usuarioController extends Controller
{
    public function regis()
    {
    ?>
   
    <form action="registro_usuario.php" method="post">
        <h3>Registro de usuarios</h3>
        <p>Nombre: <input type="text" name="Nombre" placeholder="Nombre" required=""></p>
        <p>Apellido: <input type="text" name="Apellido" placeholder="Apellido" required=""></p>
        <p>Email: <input type="email" name="email" placeholder="ejemplo@ejemplo.com" required=""></p>
        <p>Contraseña: <input type="password" name="contraseña" placeholder="contraseña" required=""></p>
        <input type="submit" name="guardar" value="Registrarse" />
    </form>


<?php  
    }
}
?>


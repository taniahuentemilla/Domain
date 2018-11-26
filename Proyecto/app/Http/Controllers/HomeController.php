<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importamos storage 
//usamos php artisan storage:link en carpeta del proyecto
use Illuminate\Support\Facades\Storage;
//importamos session
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	public function preguntar_usuario(Request $request)
	{
		//asigno valores a las variables del formulario
		$email = $request->email;
		$pass = $request->password; 
		//es el estado 
		$estado = false;
		
		//obtenemos el archivo alojado en storage 
		$contents = Storage::disk('local')->get('public/usuario.json');
		$usuariosjson = json_decode($contents); //decodifica el archivo json para leerlo
		
		//recorremos la data decodificada
		foreach($usuariosjson as $key=> $usuario){ 	
			//validamos que el email y la password sean igual al del json
			if($email == $usuario->email && $pass == $usuario->password)
			{
				//cambiamos el estado a true y creamos la variable de sesion email
				$estado = true;
				session(['email' => $email]);
			}
		
		}
		//validamos el estado
		if($estado)
		{
			//redireccionamos a home
			return redirect()->route('home');
		}
		else
		{
			//creamos una sesion flash con mensaje de error
			Session::flash('error', 'No existe usuario.' );
			//redirecciona al login 
			return redirect()->route('login');
		}
					
		
		
		
	}
}

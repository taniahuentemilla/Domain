<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class RegistroController extends Controller
{
	public function index(){
		return view('auth.register'); 
	}
	public function store(Request $request){
		try {
            // se obtiene los datos del archivo usuario.json condicionando si existe 
            $usuarioInfo = Storage::disk('local')->exists('public/usuario.json') ? json_decode(Storage::disk('local')->get('public/usuario.json')) : [];
			
            $inputData = $request->only(['email','password']);
			
 
            array_push($usuarioInfo,$inputData);
    
            Storage::disk('local')->put('public/usuario.json', json_encode($usuarioInfo));
			//$usuarioInfo =
			//json_encode($usuarioInfo)
 
			Session::flash('exito', 'Usuario registrado! ;).' );

			return redirect()->route('registro');
			
 
        } catch(Exception $e) {
 
            return ['error' => true, 'message' => $e->getMessage()];
 
        }
	}
}

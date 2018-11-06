<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Response;
use App\Http\Requests;
use App\User;

class Registro_usuarioController extends Controller {
////////////////// CRUD USUARIOS ///////////////////////////////
	public function CreateUsuarios(Request $request) {
		$usuario = new User();
		$val = $usuario->Validar($request->all());

    	if ($val->fails()) {
    		$retorno['error']     = true;
        	$retorno['respuesta'] = $val->messages();
    	} else {
			$usuario->name 	  	= $request->nombre;
			$usuario->email 	= $request->correo;
			$usuario->password  = $request->password;
			$usuario->save();

			$retorno['error']     = false;
        	$retorno['respuesta'] = $usuario;
		}
		return Response::json($retorno);
	}

	public function ReadUsuarios(Request $request) {
		if ($request->has('usuario_id')) {
			$usuario = User::find($request->usuario_id);

			$retorno['error']     = false;
        	$retorno['respuesta'] = $usuario;
		} else {
			$usuarios = User::all();
			
			$retorno['error']     = false;
        	$retorno['respuesta'] = $usuarios;
		}
		return Response::json($retorno);
	}

	public function UpdateUsuarios(Request $request) {
		if ($request->has('usuario_id')) {
			$usuario = User::find($request->usuario_id);

			if (isset($usuario)) {
				$val = $usuario->Validar($request->all());

		    	if ($val->fails()) {
		    		$retorno['error']     = true;
		        	$retorno['respuesta'] = $val->messages();
		    	} else {
					$usuario->name 	  	= $request->nombre;
					$usuario->email 	= $request->correo;
					$usuario->password  = $request->password;
					$usuario->save();

					$retorno['error']     = false;
        			$retorno['respuesta'] = "Registro actualizado satisfactoriamente";
				}
			} else {
				$retorno['error']     = true;
        		$retorno['respuesta'] = "El registro no existe";
			}
		} else {
			$usuarios = User::all();
			
			$retorno['error']     = false;
        }		
		return Response::json($retorno);
	}

	public function DeleteUsuarios(Request $request) {
		if ($request->has('usuario_id')) {
			$usuario = User::find($request->usuario_id);

			if (isset($usuario)) {
				$usuario->delete();

				$retorno['error']     = false;
        		$retorno['respuesta'] = "Registro eliminado satisfactoriamente";
			} else {
				$retorno['error']     = true;
        		$retorno['respuesta'] = "El registro no existe";
			}
		} else {
			$retorno['error']     = true;
        	$retorno['respuesta'] = "Datos requeridos: usuario_id";
		}
		return Response::json($retorno);
	}
/////////////////// FIN CRUD USUARIOS /////////////////////////////
}
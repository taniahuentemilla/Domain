<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\permisos;
use Closure;

class PermisosUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {	$permiso = permisos::where('id_usuario',Auth::user()->id)->first();
		if($permiso){
			return $next($request);
		}
		return redirect('/');
    }
}

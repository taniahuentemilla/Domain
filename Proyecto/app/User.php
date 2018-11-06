<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \Validator;

class User extends Authenticatable {

    use Notifiable;

    protected $fillable = [
        'id','nombre', 'correo', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Validar($array){
        $validator = Validator::make(
            $array, [
                'nombre' => 'required',
                'correo' => 'required',
                'password' => 'required'
            ]
        );
        return $validator;
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permisos extends Model
{
    public $timestamps = false;
    protected $table ='permisos';
    protected $primaryKey ='id';
	
	protected $fillable = [
        'id', 'tipo_cuenta', 'id_usuario',
    ];
}

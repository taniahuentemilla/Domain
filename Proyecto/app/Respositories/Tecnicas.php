<?php
namespace App\Repositories;
class Tecnicas extends GuzzleHttpRequest{
/*
* Funcion que devuelve un array con todos los documentos de la coleccion Tecnica.
*/
public function all(){
return $this->get('tecnica');
}
/*
* Funcion que devuelve la Tecnica de la id especificada.
*/
public function find($id){
return $this->get("tecnica/{$id}");
}
}
?>
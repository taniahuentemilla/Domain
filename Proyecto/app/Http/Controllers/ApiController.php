<?php
namespace App\Http\Controllers;
use App\Repositories\Tecnicas;
use Illuminate\Http\Request;
class ApiController extends Controller
{
/*
* Constructor de objeto Tecnica
*/
protected $tecnicas;
public function __construct(Tecnicas $tecnicas){
$this->tecnicas = $tecnicas;
}
/*
* Funcion que maneja la vista de la pagina /tecnicas
*/
public function index(){//muestra contenido de conexion a tecnicas
$tecnicas = $this->tecnicas->all("tecnica");
dd($tecnicas);
//return view('tecnicas.index', compact('tecnicas'));
}
/*
* Funcion que maneja la vista de la pagina /tecnicas/{id}
*/
public function show($id){//permite mostrar los datos de una id que se integra
$tecnica = $this->tecnicas->find($id);
return view('tecnicas.show', compact('tecnica'));
}
public function show_all()  //Mostrar todo perteneciente a tecnicas
{
    $tecnicas = $this->tecnicas->all("tecnica");
    dd($tecnicas);
    //return($tecnicas);
}
public function delete($id) // elimina id que pertenece a tecnicas
    {
        $tecnicas = $this->tecnicas->delete("tecnica",$id);
        dd($tecnicas);
        //return($tecnicas);
    }
    public function add() //añade 
    {
        $jsonraw = '{"habilidades_desarrolladas":["Expresion oral"],"modalidades":["Presencial"],"etiquetas":["Ingenieria","Expresion oral","Pedagogia en matematicas","Ingenieria civil en informatica","Programacion I"],"nombre":"nueva tecnica","descripcion":"Descripcion de la tecnica nueva","instrucciones":"Dato reservado en caso de necesitarlo","nrecom_participantes":10,"nrecom_integrantes_p_grupo":3,"nrecom_grupos":3,"tutor" :false,"complejidad":"Medio"}';
        $data = json_decode($jsonraw);
        
        $tecnicas = $this->tecnicas->add("tecnica",$data);
        dd($tecnicas);
        //return($tecnicas);
    }
    public function update($id) //actualiza 
    {
        $jsonraw = '{"habilidades_desarrolladas":["pan con queso "],"modalidades":["Presencial"],"etiquetas":["Ingenieria","Expresion oral","Pedagogia en matematicas","Ingenieria civil en informatica","Programacion I"],"nombre":"nueva tecnica","descripcion":"Descripcion de la tecnica nueva","instrucciones":"Dato reservado en caso de necesitarlo","nrecom_participantes":10,"nrecom_integrantes_p_grupo":3,"nrecom_grupos":3,"tutor" :false,"complejidad":"Medio"}';
        $data = json_decode($jsonraw);
        $tecnicas = $this->tecnicas->update("tecnica",$id,$data);
        dd($tecnicas);
        //return($tecnicas);
    }

}
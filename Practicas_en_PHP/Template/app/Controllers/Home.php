<?php

namespace App\Controllers;
use App\Models\AutoresModel;

class Home extends BaseController
{
    public function index()
    {
        return view('main');
    }

    //Muestra la lista de todos los autores
    public function autores() {
        $autores = new AutoresModel();
        $data = ["data" => $autores->getAll()];
        return view('autores/autores',$data);
    }

    //Llama la vista configurada para modificar un autor
    public function modificar_autor($autor_id){
        $autor = new AutoresModel();
        $data = ["data" => $autor->selectAuthor($autor_id)];
        $data["estado"] = "modificando";
        return view('autores/detalles_autor',$data);
    }

    //Llama la vista configurada o preparada para agregar un autor
    public function agregar_autor(){
        $data = ["estado" => "agregando"];
        return view('autores/detalles_autor',$data);
    }

    //Se llama para agregar el nuevo autor a la base de datos
    public function nuevo_autor(){
        $autores = new AutoresModel();
        $result = $autores->insertAuthor($_POST["nombre"],$_POST["apellido"],$_POST["pais"]);
        return $this->autores();
    }

    //Se llama para actualizar los datos del autor a la base de datos
    public function actualizar_autor(){
        $autores = new AutoresModel();
        $result = $autores->updateAuthor($_POST["nombre"],$_POST["apellido"],$_POST["pais"],$_POST["autor_id"]);
        return $this->autores();
    }

    //Se llama para eliminar a un autor
    public function eliminar_autor($id){
        $autores = new AutoresModel();
        $autores->softDeleteAuthor($id);
        return $this->autores();
    }


}

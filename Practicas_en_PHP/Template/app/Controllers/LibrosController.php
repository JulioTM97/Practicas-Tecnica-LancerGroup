<?php

namespace App\Controllers;
use App\Models\LibrosModel;
use App\Models\AutoresModel;

class LibrosController extends BaseController
{
    //obtiene todos los libros
    public function libros() {
        $libros = new LibrosModel();
        $data = ["data" => $libros->getAll()];
        return view('libros/libros',$data);
    }

    public function eliminar_libro($id){
        $libros = new LibrosModel();
        $libros->deleteBook($id);
        return $this->libros();
    }

    public function modificar_libro($libro_id){
        $libro = new LibrosModel();
        $autores = new AutoresModel();
        $data = ["data" => $libro->selectBook($libro_id)];
        $data["estado"] = "modificando";
        $data["autores"] = $autores->getAll();
        return view('libros/detalles_libro',$data);
    }

    public function agregar_libro(){
        $data = ["estado" => "agregando"];
        $autores = new AutoresModel();
        $data["autores"] = $autores->getAll();
        return view('libros/detalles_libro',$data);
    }

    public function actualizar_libro(){
        $libros = new LibrosModel();
        $result = $libros->updateBook($_POST["nombre"],$_POST["edicion"],$_POST["autor_id"],$_POST["libro_id"]);
        return $this->libros();
    }

    public function nuevo_libro(){
        $libros = new LibrosModel();
        $result = $libros->insertBook($_POST["nombre"],$_POST["edicion"],$_POST["autor_id"]);
        return $this->libros();
    }

}

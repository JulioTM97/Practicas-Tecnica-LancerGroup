<?php

namespace App\Controllers;
use App\Models\AutoresModel;

class Home extends BaseController
{
    public function index()
    {
        return view('main');
    }

    public function autores() {
        $autores = new AutoresModel();
        $data = ["data" => $autores->getAll()];
        return view('autores/autores',$data);
    }

    public function modificarAutor($autor_id){
        $autor = new AutoresModel();
        $data = ["data" => $autor->selectAuthor($autor_id)];
        return view('autores/modificar_autores',$data);
    }
}

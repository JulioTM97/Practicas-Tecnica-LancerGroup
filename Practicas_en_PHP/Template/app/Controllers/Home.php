<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = ["title"=>" - Inicio"];
        echo view("header",$data);
        echo view('Intro');
        echo view("footer");
    }
}

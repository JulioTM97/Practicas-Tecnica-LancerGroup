<?php

namespace App\Controllers;
use App\Models\AutoresModel;

class Home extends BaseController
{
    public function index()
    {
        return view('main');
    }
}

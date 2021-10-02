<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $datos = [
            "titulo" => "Inicio de CodeIgniter 4!!"
        ];
        return view('welcome_message', $datos);
    }
}

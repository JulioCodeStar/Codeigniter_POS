<?php

namespace App\Controllers;

class Usuarios extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}

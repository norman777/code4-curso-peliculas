<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // 0/0;
        // echo 'Hola Mundo';
        return view('welcome_message');
    }

    public function update ($id, $otro=5)
    {
        echo $id.''.$otro;
        //0/0;
    }

}

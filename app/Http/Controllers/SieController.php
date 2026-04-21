<?php

namespace App\Http\Controllers;


class SieController extends Controller
{
    public function index(){
        $name = 'pedro';
        $habits = ['ler', 'correr', 'estudar'];
        return view("home", [
            "name"=> $name,
            "habits"=> $habits
            ]);
    }
}

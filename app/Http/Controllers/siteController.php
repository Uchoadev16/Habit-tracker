<?php

namespace App\Http\Controllers;


class siteController extends Controller
{
    public function index(){

    $name = "Pedro Uchôa";
    $habits = ['ler', 'escreve', 'falar'];
    
    return view("home", compact("name","habits"));
    }

    public function dashboard(){
        return view("dashboard");
    }
}

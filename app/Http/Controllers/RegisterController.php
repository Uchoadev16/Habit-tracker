<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view("register");
    }

    public function store(RegisterRequest $request){
        
        $user = User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('site.login')->with('success', 'Cadastro realizado com sucesso! Faça login para continuar.');
    }
}
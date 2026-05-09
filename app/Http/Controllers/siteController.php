<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class siteController extends Controller
{
    public function index(): View{

        return view("home");
    }

    public function dashboard(): View{

    $habits = auth()->user()->habits;
        return view("dashboard", compact('habits'));
    }
}
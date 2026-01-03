<?php

namespace App\Http\Controllers;


class SiteController extends Controller
{
    public function index()
    {
        $nome   = 'Laravel';
        $habits = ['Coding', 'Reading', 'Traveling'];

        return view('home', compact('nome', 'habits'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}

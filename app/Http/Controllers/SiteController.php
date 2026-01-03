<?php

namespace App\Http\Controllers;


class SiteController extends Controller
{
    public function index()
    {
        $nome   = 'Laravel';
        $habits = ['Coding', 'Reading', 'Traveling'];

        return view('home', [
            'nome'   => $nome,
            'habits' => $habits
        ]);
    }
}

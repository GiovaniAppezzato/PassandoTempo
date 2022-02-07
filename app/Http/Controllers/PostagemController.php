<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostagemController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show()
    {
        return view('postagem.show');
    }

    public function create()
    {
        return view('postagem.create');
    }
}

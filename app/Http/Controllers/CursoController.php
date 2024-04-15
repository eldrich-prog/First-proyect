<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller{
    public function index()
    {
        return 'Bienvenido al curso';
    }
    public function create()
    {
        return 'Aqui puedes crear un curso';
    }
    public function show($curso)
    {
        return "Bienvenido al curso: ". $curso;
    }
}

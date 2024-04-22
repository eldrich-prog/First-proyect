<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class CursoController extends Controller{
    public function index()
    {
        return view('curso.index');
    }
    public function create()
    {
        return view('curso.create');
    }
    public function show($curso)
    {
        $curso = intval($curso);

        if (is_integer($curso) == true) {
            return view('curso.show', compact('curso'));
        }
        else {
            return ('curso.error');
        }
        
    }
}

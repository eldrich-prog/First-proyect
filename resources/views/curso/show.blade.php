@extends('layouts.plantilla')
@section('title', 'Curso '.$curso)
@section('content')
    <h1>Bienvenido al curso </h1>
    <p>This is the home page content</p>
    <p><strong>Nombre del curso:</strong> {{$curso}}</p>
@endsection
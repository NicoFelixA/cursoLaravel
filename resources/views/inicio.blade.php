@extends('master')

@section('contenido')
    <h2>Sistema de control escolar CETIS107</h2>

    <hr>
    <h3>Catalagos disponibles</h3>
    <p>
        <a href="{{ url('alumnos') }}" class="btn btn-lg btn-primary">Alumnos</a>
    </p>
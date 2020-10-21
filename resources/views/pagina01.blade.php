@extends('layouts.ejemplolayout')

@section('titulo', 'Página 01 del proyecto')

@section('barralateral')
    <p>Esta parte está en la barra lateral</p>
@endsection
    
    
@section('contenido')
    <p>Este está en el body</p>

    <a href="{{ url('/pagina02/Historia') }}" class="btn btn-xs btn-info pull-right">HISTORIA</a>
    <a href="{{ url('/pagina02/Economia') }}" class="btn btn-xs btn-info pull-right">ECONOMÍA</a>
    <a href="{{ url('/pagina02/Ingles') }}" class="btn btn-xs btn-info pull-right">INGLÉS</a>
@endsection
@extends('layouts.ejemplolayout')

@section('titulo', 'Página 01 del proyecto')

@section('barralateral')

    <p>Esta parte esta en la barra lateral</p>
@endsection

@section('contenido')

    <p>Este es el Body</p>
    <a href="{{url('pagina02/Historia') }}" class="btn btn-xs btn-info pull-rigth">Historia</a>
    <a href="{{url('pagina02/Economia') }}" class="btn btn-xs btn-info pull-rigth">Economía</a>
    <a href="{{url('pagina02/Ingles') }}" class="btn btn-xs btn-info pull-rigth">Inglés</a>
    <a href="{{url('pagina02/Filosofia') }}" class="btn btn-xs btn-info pull-rigth">Filosofía</a>
@endsection
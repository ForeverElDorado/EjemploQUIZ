@extends('layouts.ejemplolayout')

@section('titulo', 'Página 01 del proyecto')

@section('barralateral')

<p>Esta parte esta en la barra lateral</p>
@endsection

@section('contenido')

<p>Este es el Body</p>
<a href="{{url('pregunta', ['Historia']) }}" class="btn btn-xs btn-info pull-rigth">HISTORIA</a>
<a href="{{url('pregunta', ['Economia']) }}" class="btn btn-xs btn-info pull-rigth">ECONOMIA</a>
<a href="{{url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info pull-rigth">INGLES</a>
<a href="{{url('api/preguntas', ['Historia']) }}" class="btn btn-xs btn-info pull-rigth">Histora pero un json solo</a>

@endsection
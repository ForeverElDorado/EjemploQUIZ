@extends('layouts.ejemplolayout')

@section('titulo', 'Página 01 del proyecto')

@section('barralateral')

    <p>Esta parte esta en la barra lateral</p>
@endsection

@section('contenido')

    <p>Este es el Body</p>
    <a href="{{url('pagina02')}}" class="btn btn-xs btn-info pull-rigth">Pagina 02</a>
@endsection
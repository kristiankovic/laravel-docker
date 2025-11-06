@extends('components.layout-app')

@section('title', 'Datos | App')

@section('header')
    <a href="inicio">Página de inicio</a>
    <p>Información recibidia y guardada</p>
@endsection

@section('content')
    <div class="flex flex-col">
        <p>Nombre: {{ $nombre }}</p>
        <p>Edad: {{ $edad }}</p>
    </div>
@endsection

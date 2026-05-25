@extends('components.layout-app')

@section('title', 'Página principal | App')

@section('header')
    <h2>Página de inicio</h2>
@endsection

@section('content')

    <form action="{{ route('rdata') }}" method="post">
        
        @csrf
        <h2 class="p-2 text-lg text-center">Formulario de ingreso de información</h2>

        <div class="flex flex-col gap-5">
            <input class="border rounded-sm p-3" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre completo" required>

            <input class="border rounded-sm p-3" type="number" name="edad" id="edad" placeholder="Ingrese su edad" required min="17" max="90">
        </div>

        <div class="flex flex-row justify-center">
            <button class="bg-blue-500 text-white rounded-sm w-100 mt-3 p-2" type="submit">Enviar</button>
        </div>

    </form>
@endsection
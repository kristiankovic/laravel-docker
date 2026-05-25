@extends('pages.inicio')

@section('title', 'Index - Departamentos')

@section('content')

@push('css')
    <style>
        table{
            width: 100%;
        }
    </style>
@endpush
    <div class="container m-auto">

        <p class="text-center p-2 text-lg color-sky-700">Información de los empleados</p>
        <table class="table-auto">

            <thead>
                <th class="p-2">Id</th>
                <th class="p-2">Nombre</th>
                <th class="p-2">Email</th>
                <th class="p-2">Departamento</th>
                <th class="p-2" colspan="2">Acción</th>
            </thead>
            
            <tbody>
                @foreach ($empleados as $empleado)

                    <tr class="p-2 text-center border-2">
                        <td>{{ $empleado->id }}</td>
                        <td>{{ $empleado->nombreEmpleado }}</td>
                        <td>{{ $empleado->correoEmpleado }}</td>
                        
                        @switch($empleado->departamento_id)
                            @case(1)
                                <td class="p-2">Recursos Humanos</td>
                                @break
                            @case(2)
                                <td class="p-2">Informática</td>
                                @break
                            @case(3)
                                <td class="p-2">Contabilidad</td>
                                @break
                            @case(4)
                                <td class="p-2">Mercadotecnia</td>
                                @break
                            @case(5)
                                <td class="p-2">Marketing</td>
                                @break

                            @default
                                <td class="p-2">Gerencia</td>
                        @endswitch
                        <td><a href="#"><span class="bg-red-100 text-red-800 text-base font-medium me-2 px-2.5 py-1 rounded-sm dark:bg-red-900 dark:text-red-200">Eliminar</span></a></td>
                        <td><a href="#"><span class="bg-blue-100 text-blue-800 text-base font-medium me-2 px-2.5 py-1 rounded-sm dark:bg-blue-900 dark:text-blue-300">Editar</span></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

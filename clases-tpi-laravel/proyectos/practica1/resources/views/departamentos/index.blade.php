@extends('pages.inicio')

@section('title', 'Index - Departamentos')

@section('content')

    <div class="container m-auto">

        <h1 class="text-center p-2">Información de los departamentos</h1>
        <table class="table-auto">
            <thead>
                <th class="p-2">id</th>
                <th class="p-2">Nombre</th>
            </thead>
            <tbody>
                @foreach ($dataDepartamentos as $itemDepartamento)
                    <tr class="p-2">
                        <td>{{ $itemDepartamento->id }}</td>
                        <td>{{ $itemDepartamento->nombreDepartamento }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

    @extends('pages.inicio')
    @section('title', 'Index - Productos')

    @push('css')
        <style>
            table {
                width: 100%;
            }

            table th, td{
                padding: 10px;
            }
        </style>
    @endpush

    @section('content')

        <div class="container mx-auto">

            <p class="text-center p-2">Informacion de los productos</p>

            <table class="m-4">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Existencia</th>
                    <th>Precio</th>
                    <th>Id Categoria</th>
                </thead>

                <tbody>
                    @foreach ($productos as $producto)
                        <tr class="p-2 text-center border-2">
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->stock }}</td>
                            <td>${{ $producto->precio }}</td>
                            <td>{{ $producto->categorias_id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @endsection

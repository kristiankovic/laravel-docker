@extends('components.layout-app')

@push('css')
    <style>
        *{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 1.1rem;
        }
    </style>    
@endpush

@section('content')

    <div class="flex flex-row flex-grap gap-5 p-3 bg-amber-200">

        <x-card nombre="Lord Farckuad" img="img/img1.jpg">
        </x-card>

        <x-card nombre="Gengi" img="img/img5.jpg">
        </x-card>

        <x-card nombre="Burro" img="img/img4.jpg">
        </x-card>

        <x-card nombre="Lady" img="img/img2.jpg">
        </x-card>

        <x-card nombre="Shreck" img="img/img3.jpg">
        </x-card>        

    </div>
    
@endsection
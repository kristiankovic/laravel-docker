@extends('components.layout-app')

@push('css')   
@endpush

@section('content')

    <div class="flex flex-row justify-center flex-wrap gap-5 p-3 bg-">


        <x-card nombre="Burro" img="img/img4.jpg">
        </x-card>

        <x-card nombre="Gengi" img="img/img5.jpg">
        </x-card>
    </div>
    
@endsection
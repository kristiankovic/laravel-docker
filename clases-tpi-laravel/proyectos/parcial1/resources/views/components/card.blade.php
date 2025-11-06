@props(['nombre'=>'', 'img'=>''])

<div class="w-55 h-auto border-2 rounded-2xl">

    <img class="rounded-2xl w-100 h-70" src="{{ $img }}">

    <h4 class="text-center p-2">{{ $nombre }}</h4>

</div>
@props(['breedsCsv'])

@php
    $genres = explode(',', $breedsCsv);
@endphp


<ul class="flex">
    @foreach ($genres as $genre)
    <li
    class="flex items-center justify-center bg-amber-500 text-white rounded-xl py-1 px-3 mr-2 text-xs"
>
    <a href="/?tag={{$genre}}">{{$genre}}</a>
</li>
    @endforeach
    
</ul>
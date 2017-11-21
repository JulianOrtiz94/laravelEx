@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        Laratter
    </div>

        @if(isset($teacher))
        <p>Profesor: {{ $teacher }}</p>
        @else
        <p>Profesor sin asignar </p>
        @endif

    <div class="links">
        @foreach ($links as $link => $text)
        <a href="{{ $link }}">{{ $text }}</a>
        {{--  <a href="https://laravel.com/docs">Documentation</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>  --}}
        @endforeach
    </div>    
@endsection

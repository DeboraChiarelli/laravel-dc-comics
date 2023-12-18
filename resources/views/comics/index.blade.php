@extends('layouts.app')

@section('content')
    <h1>Elenco dei Fumetti</h1>

    @foreach ($comics as $comic)
        <div>
            <h2>{{ $comic->title }}</h2>
            <p>{{ $comic->description }}</p>
            <p>Prezzo: ${{ $comic->price }}</p>
            <p>Serie: {{ $comic->series }}</p>
            <p>Data di vendita: {{ $comic->sale_date }}</p>
            <p>Tipo: {{ $comic->type }}</p>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" style="max-width: 200px;">
            <a href="{{ route('comics.show', $comic->id) }}">Dettagli</a>
        </div>
    @endforeach
    
@endsection
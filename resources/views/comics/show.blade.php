@extends('layouts.app')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <p>Prezzo: ${{ $comic->price }}</p>
    <p>Serie: {{ $comic->series }}</p>
    <p>Data di vendita: {{ $comic->sale_date }}</p>
    <p>Tipo: {{ $comic->type }}</p>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" style="max-width: 400px;">
    <a href="{{ route('comics.index') }}">Torna all'elenco</a>
@endsection
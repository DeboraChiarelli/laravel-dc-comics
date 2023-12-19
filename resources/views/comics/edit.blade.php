@extends('layouts.app')

@section('content')
    <h1>Modifica il Comic</h1>

    <form method="post" action="{{ route('comics.update', $comic->id) }}">
        @csrf
        @method('PUT')
        
        <label for="title">Titolo:</label>
        <input type="text" name="title" id="title" value="{{ $comic->title }}" required>

        <label for="description">Descrizione:</label>
        <textarea name="description" id="description" required>{{ $comic->description }}</textarea>

        <label for="price">Prezzo:</label>
        <input type="text" name="price" id="price" value="{{ $comic->price }}" required>

        <label for="series">Serie:</label>
        <input type="text" name="series" id="series" value="{{ $comic->series }}" required>

        <label for="sale_date">Data di vendita:</label>
        <input type="text" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}" required>

        <label for="type">Tipo:</label>
        <input type="text" name="type" id="type" value="{{ $comic->type }}" required>

        <label for="thumb">Link dell'Immagine:</label>
        <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}" required>

        <button type="submit">Salva Modifiche</button>
    </form>

    <a href="{{ route('comics.index') }}">Torna all'elenco</a>
@endsection
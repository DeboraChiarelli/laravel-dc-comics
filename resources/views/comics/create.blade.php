@extends('layouts.app')

@section('content')
    <h1>Aggiungi un nuovo Fumetto</h1>

    <form method="post" action="{{ route('comics.store') }}" enctype="multipart/form-data">
        @csrf
        <label for="title">Titolo:</label>
        <input type="text" name="title" id="title" required>

        <label for="description">Descrizione:</label>
        <textarea name="description" id="description" required></textarea>

        <label for="price">Prezzo:</label>
        <input type="text" name="price" id="price" required>

        <label for="series">Serie:</label>
        <input type="text" name="series" id="series" required>

        <label for="sale_date">Data di vendita:</label>
        <input type="text" name="sale_date" id="sale_date" required>

        <label for="thumb">Immagine:</label>
        <input type="file" name="thumb" id="thumb" accept="image/*" required>

        <button type="submit">Salva</button>
    </form>

    <a href="{{ route('comics.index') }}">Torna all'elenco</a>
@endsection
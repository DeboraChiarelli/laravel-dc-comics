<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index() // Questo metodo viene chiamato quando si visita la pagina principale dei fumetti (/comics). Utilizza il model Comic per recuperare tutti i fumetti dal database e passa l'elenco di fumetti alla vista 'comics.index' utilizzando la funzione view.
    {
        $comics = Comic::all(); // In questo modo ottengo tutti i fumetti dal database utilizzando il model Comic
        return view('comics.index', compact('comics')); // Faccio ritornare la vista 'comics.index', passando l'elenco di fumetti come variabile
    }

    public function show($id) // Questo metodo viene chiamato quando si accede ai dettagli di un singolo fumetto (/comics/{id}). Utilizza il model Comic per trovare il fumetto nel database con l'ID specificat e poi passa i dettagli del fumetto alla vista denominata 'comics.show' utilizzando la funzione view.
    
    {
        $comic = Comic::findOrFail($id); // In questo mido trovo il fumetto nel database con l'ID specificato utilizzando il modello Comic
        return view('comics.show', compact('comic')); // Faccio ritornare la vista 'comics.show', passando i dettagli del fumetto come variabile
    }

}

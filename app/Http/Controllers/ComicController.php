<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

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

    public function create() // Chiamo il metodo create per mostrare il formulario per creare un nuovo fumetto.
    {
    return view('comics.create'); // In questo modo mi restituisce la vista comics.create, che si trova in resources/views/comics/create.blade.php.
    }

    public function store(Request $request) // Questo metodo gestisce i dati inviati tramite il metodo create. Quando l'utente invia il formulario (utilizzando il metodo POST), viene richiamato questo metodo.
    {
    // Diedump dei parametri
    // dd($request->all());
    $data = $request->validate([ // Utilizzo metodo validate affiché i dati inviati siano corretti. Il prezzo deve essere numerico, la data deve essere una data valida e l'URL dell'immagine deve essere valido.

        "title" => "required|max:100",
        "description" => "nullable|max:10000",
        "thumb" => "required|min:3|max:255",
        "price" => "required|decimal|min:1|max:50", // Ho aggiunto |decimal alla regola di validazione del prezzo per assicurarmi che il prezzo sia un valore deciamle.
        "series" => "required|min:1|max:70",
        "sale_date" => "required|date",
        "type" => "required|min:1|max:70"
    ]);

    $comic = Comic::create($data);
    return redirect()->route("comics.show", $comic->id);
    }

    public function edit($id){
        $comic = Comic :: FindOrFail($id);
        return view("comics.edit", compact("comic"));
    }
    public function update(Request $request, $id)
    {
    $data = $request->validate([
        "title" => "required|max:100",
        "description" => "nullable|max:10000",
        "thumb" => ["required", "url", "min:3", "max:255"],
        "price" => "required|decimal|min:1|max:50",
        "series" => "required|min:1|max:70",
        "sale_date" => "required|date|max:70",
        "type" => "required|min:1|max:70"
    ]);
    $comic = Comic :: findOrFail($id);
    $comic->update($data);
    return redirect()->route('comics.show', $comic->id);
    }

}

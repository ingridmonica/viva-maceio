<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Evento;
use App\Models\LocalEvento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function show(Evento $evento)
    {
        $evento->load('local', 'categorias');

        return view('evento.detalhar', compact('evento'));
    }

    public function create()
    {
        $categorias = Categoria::all();

       // return view('eventos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $evento = Evento::create($request->validated());

        $evento->categorias()->sync($request->categorias);

        return redirect()->route('home')->with('success', 'Evento criado com sucesso!');
    }
}

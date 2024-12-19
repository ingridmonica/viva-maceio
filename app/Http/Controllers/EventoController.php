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
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'nome_organizador' => 'nullable|string|max:255',
            'descricao' => 'nullable|string',
            'data_hora_inicio' => 'required|date',
            'data_hora_fim' => 'required|date|after_or_equal:data_hora_inicio',
            'idade_minima' => 'nullable|integer',
            'link' => 'nullable|url|max:255',
            'imagem' => 'nullable|url|max:255',
            'fl_ingresso' => 'required|boolean',
            'fl_gratis' => 'required|boolean',
            'local_nome' => 'required|string|max:255',
            'local_rua' => 'required|string|max:255',
            'local_cidade' => 'required|string|max:255',
            'local_estado' => 'required|string|max:255',
            'local_numero' => 'required|string|max:10',
        ]);

        // Criar ou associar o local do evento
        $local = LocalEvento::create([
            'nome' => $validated['local_nome'],
            'rua' => $validated['local_rua'],
            'cidade' => $validated['local_cidade'],
            'estado' => $validated['local_estado'],
            'numero' => $validated['local_numero'],
        ]);


        // Criar o evento
        $evento = Evento::create([
            'titulo' => $validated['titulo'],
            'idade_minima' => $validated['idade_minima'] ?? null,
            'descricao' => $validated['descricao'] ?? null,
            'data_hora_inicio' => $validated['data_hora_inicio'],
            'data_hora_fim' => $validated['data_hora_fim'],
            'link' => $validated['link'] ?? null,
            'imagem' => $validated['imagem'] ?? null,
            'nome_organizador' => $validated['nome_organizador'] ?? null,
            'fl_ingresso' => $validated['fl_ingresso'] ?? null,
            'fl_gratis' => $validated['fl_gratis'] ?? null,
            'fk_local' => $local->id,
        ]);

        return redirect()->back()->with('success', 'Evento cadastrado com sucesso!');
    }

}

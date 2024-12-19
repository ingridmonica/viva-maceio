<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Evento;
use App\Models\LocalEvento;
use Carbon\Carbon;
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
        return view('dashboard', compact('categorias'));
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
            'categorias' => 'required|array',
            'categorias.*' => 'exists:categoria_evento,id', // Atualizado para refletir o nome correto da tabela
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

        // Associar as categorias ao evento
        $evento->categorias()->sync($validated['categorias']); // Associa as categorias

        return redirect()->back()->with('success', 'Evento cadastrado com sucesso!');
    }



    public function listarHoje(Request $request)
    {
        $query = Evento::query();

        $query->where('data_hora_inicio', '<=', Carbon::now());

        $query->where('data_hora_fim', '>=', Carbon::now());

        $eventos = $query->get();

        $categorias = Categoria::all();

        return view('evento.listar', compact('eventos', 'categorias'));
    }

    public function listar(Request $request)
    {
        $query = Evento::query();

        if ($request->has('titulo') && $request->input('titulo') != '') {
            $query->where('titulo', 'like', '%' . $request->input('titulo') . '%');
        }

        if ($request->has('categoria') && $request->input('categoria') != '') {
            $query->whereHas('categorias', function ($q) use ($request) {
                $q->where('nome', $request->input('categoria'));
            });
        }

        if ($request->has('data_hora_inicio') && $request->input('data_hora_inicio') != '') {
            $query->where('data_hora_inicio', '>=', $request->input('data_hora_inicio'));
        }

        if ($request->has('data_hora_fim') && $request->input('data_hora_fim') != '') {
            $query->where('data_hora_fim', '<=', $request->input('data_hora_fim'));
        }

        $eventos = $query->get();

        $categorias = Categoria::all();

        return view('evento.listar', compact('eventos', 'categorias'));
    }

}

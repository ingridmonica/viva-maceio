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

       // return view('eventos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $evento = Evento::create($request->validated());

        $evento->categorias()->sync($request->categorias);

        return redirect()->route('home')->with('success', 'Evento criado com sucesso!');
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

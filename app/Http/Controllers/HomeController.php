<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Categoria;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $eventosDestaque = Evento::where('fl_destaque', true)->take(2)->get();

        $proximosEventos = Evento::where('data_fim', '>=', now())->orderBy('data_inicio', 'asc')->take(6)->get();

        $categorias = Categoria::all();

        return view('welcome', compact('eventosDestaque', 'proximosEventos', 'categorias'));
    }

    /**
     * Exibe a página de cadastro de solicitação.
     */
//    public function cadastroSolicitacao()
//    {
//        return view('cadastro-solicitacao');
//    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'evento';

    protected $primaryKey = 'id';

    protected $fillable = [
        'titulo',
        'idade_minima',
        'descricao',
        'data_hora_inicio',
        'data_hora_fim',
        'link',
        'imagem',
        'nome_organizador',
        'fl_ingresso',
        'fl_gratis',
        'fk_local',
    ];

    protected $casts = [
        'data_hora_inicio' => 'datetime',
        'data_hora_fim' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'fl_ingresso' => 'boolean',
        'fl_gratis' => 'boolean',
        'fl_ativo' => 'boolean',
        'fl_destaque' => 'boolean',
    ];

    public function local()
    {
        return $this->belongsTo(LocalEvento::class, 'fk_local');
    }

    public function usuarioAprovacao()
    {
        return $this->belongsTo(User::class, 'fk_usuario_aprovacao');
    }

    public function solicitacaoEvento()
    {
        return $this->belongsTo(SolicitacaoPostagemEvento::class, 'fk_solicitacao_evento');
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'evento_categorias', 'fk_evento', 'fk_categoria');
    }


}

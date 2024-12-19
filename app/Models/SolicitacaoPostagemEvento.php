<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitacaoPostagemEvento extends Model
{
    use HasFactory;

    protected $table = 'solicitacao_postagem_evento';

    protected $primaryKey = 'id';

    protected $fillable = [
        'titulo',
        'idade_minima',
        'descricao',
        'nome_organizador',
        'link',
        'imagem',
    ];

    protected $casts = [
        'data_hora_inicio' => 'datetime',
        'data_hora_fim' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'fl_ingresso' => 'boolean',
        'fl_gratis' => 'boolean',
        'fl_ativo' => 'boolean',
    ];

    public function local()
    {
        return $this->belongsTo(SolicitacaoLocalEvento::class, 'fk_local');
    }

    public function status()
    {
        return $this->belongsTo(StatusSolicitacaoEvento::class, 'fk_status');
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'solicitacao_categorias', 'fk_solicitacao_evento', 'fk_categoria');
    }

}

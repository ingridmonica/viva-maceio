<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitacaoCategorias
    extends Model
{
    use HasFactory;

    protected $table = 'solicitacao_categorias';

    protected $fillable = ['fk_categoria', 'fk_solicitacao_evento'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function solicitacaoEvento()
    {
        return $this->belongsTo(SolicitacaoPostagemEvento::class, 'fk_solicitacao_evento');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'fk_categoria');
    }

}

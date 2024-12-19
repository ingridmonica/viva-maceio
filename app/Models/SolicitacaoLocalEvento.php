<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitacaoLocalEvento extends Model
{
    use HasFactory;

    protected $table = 'solicitacao_local_evento';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nome',
        'rua',
        'cidade',
        'estado',
        'numero',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

}

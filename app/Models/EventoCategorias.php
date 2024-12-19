<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoCategorias extends Model
{
    use HasFactory;

    protected $table = 'evento_categorias';

    protected $fillable = ['fk_categoria', 'fk_evento'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];


    public function evento()
    {
        return $this->belongsTo(Evento::class, 'fk_evento');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'fk_categoria');
    }
}


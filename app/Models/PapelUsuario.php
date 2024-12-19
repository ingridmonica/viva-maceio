<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PapelUsuario
    extends Model
{
    use HasFactory;

    protected $table = 'papel_usuario';

    protected $fillable = [
        'id',
        'nome',
    ];


}

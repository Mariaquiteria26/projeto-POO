<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doce extends Model
{
   protected $fillable = [
        'nome',
        'descricao',
        'preco'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'localizacao',
        'valor',
        'numero_do_quarto',
        'piscina',
    ];
}

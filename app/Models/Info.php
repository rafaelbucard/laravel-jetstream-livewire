<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'nome',
            'cidade',
            'bairro',
            'endereco',
            'cep',
            'nascimento'
    ];
    use HasFactory;

    public $timestamps = false;
    public $table = 'info';
}

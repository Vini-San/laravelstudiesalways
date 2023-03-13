<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $table = 'pessoa';

    protected $fillable = [
            'nome',
            'cpf',
            'email',
            'data_nasc',
            'nascionalidade',
    ];

    public function telefone()
    {
        /* return $this->belongsTo(Telefones::class); */
        return $this->hasMany(Telefones::class,'id');
    }
}

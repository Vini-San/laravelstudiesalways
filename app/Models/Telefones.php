<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefones extends Model
{
    use HasFactory;

    protected $table = 'telefones';

    protected $fillable = [
        'telefone',
        'id'
    ];

    public function pessoas()
    {
        return $this->hasMany(Pessoa::class, 'id_telefone','id');
    }
}

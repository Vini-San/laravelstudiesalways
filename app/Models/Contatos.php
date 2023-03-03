<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    use HasFactory;
    protected $table='categorias';
    protected $fillable = ['cpf', 'cep', 'numero', 'whatsapp', 'id_user', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->hasOne(User::class, 'id');
    }
     
    
}

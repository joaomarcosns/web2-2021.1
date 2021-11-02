<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    
    protected $table = "fornecedores";

    protected $fillable = [
        'nome',
        'cnpj',
        'telefone',
        'endereco'
    ];

    public function entrada()
    {
        return $this->hasMany(Entrada::class, 'id_fornecedor', 'id');
    }

    
}

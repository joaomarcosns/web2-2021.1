<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensEntrada extends Model
{
    use HasFactory;
    protected $table = 'itens_entrada';
    protected $fillable = [
        'id_entrada', 
        'id_produto', 
        'quantidade', 
        'valor_unitario'
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_produto', 'id');
    }

    public function entrada()
    {
        return $this->belongsTo(Entrada::class, 'id_entrada', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensVenda extends Model
{
    use HasFactory;
    protected $table = 'itens_venda';
    protected $fillable = [
        'id_venda', 
        'id_produto', 
        'quantidade', 
        'valor_unitario'
    ];


    public function venda(){
        return $this->belongsTo(Venda::class, 'id_venda','id');
    }

    public function produto(){
        return $this->belongsTo(Produto::class, 'id_produto','id');
    }
}

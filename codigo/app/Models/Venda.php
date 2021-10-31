<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $table = "vendas";

    protected $fillable = [
        'id_cliente',
        'valortotal',
        'datavenda'
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id','id');
    }

    function itens_venda(){
        return $this->hasMany(ItensVenda::class, 'id_venda', 'id');
    }
}

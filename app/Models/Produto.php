<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'descricao',
        'cod_barras',
        'preco_compra',
        'preco_venda',
        'moeda_compra',
        'quantidade'
    ];

    public function venda() {
        return $this->hasMany(Venda::class);
    }
}

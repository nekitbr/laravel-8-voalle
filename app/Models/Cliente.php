<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome',
        'email',
        'fone',
        'endereco',
        'nascimento',
        'sexo',
        'cpf'
    ];

    public function venda() {
        return $this->hasMany(Venda::class);
    }
}

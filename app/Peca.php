<?php

namespace Chat;

use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    protected $table = 'pecas';

    protected $fillable = [
        'id',
        'nome',
        'id_fornecedor',
        'id_estoque',
        'marca',
        'valor'
    ];

    public function fornecedores() {
        return $this->hasMany(Fornecedor::class);
    }
    public function estoques() {
        return $this->hasOne(Estoque::class);
    }

}
<?php

namespace Chat;

use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    protected $table = 'pecas';

    protected $fillable = [  // o que eu quiser incluir vai dentro do fillable   // o qu eé forenqin?
        'id',
        'nome',
        'id_fornecedor',
        'id_estoque',
        'marca',
        'valor'
    ];

    public function fornecedores() {
        return $this->hasMany(Fornecedor::class); // pega classe do controle
    }
    public function estoques() {
        return $this->hasOne(Estoque::class);
    }

}
<?php

namespace Chat;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedores';

    protected $fillable = [   //“fillable” que indica quais os dados serão acessíveis:
        'id',
        'nome',
        'id_fornecedor',
        'contato'
    ];

    public function fornecedores() {
        return $this->hasOne(Fornecedor::class);     // pega classe do controle
    }
}

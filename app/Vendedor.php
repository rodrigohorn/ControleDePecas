<?php

namespace Chat;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedores';

    protected $fillable = [
        'id',
        'nome',
        'id_fornecedor',
        'contato'
    ];

    public function fornecedores() {
        return $this->hasOne(Fornecedor::class);
    }
}

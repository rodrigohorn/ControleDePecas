<?php

namespace Chat;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';

    protected $fillable = [
        'id',
        'nome',
        'cidade',
        'endereco',
        'contato'
    ];

    public function pecas() {
        return $this->hasMany(Peca::class);
    }

    public function vendedores() {
        return $this->hasMany(Vendedor::class);
    }
}

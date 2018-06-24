<?php

namespace Chat;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';

    protected $fillable = [  //“fillable” que indica quais os dados serão acessíveis:
        'id',
        'nome',
        'cidade',
        'endereco',
        'contato'
    ];

    public function pecas() {
        return $this->hasMany(Peca::class);  // ligação para peças, “has many” significa “tem muitos”
    }

    public function vendedores() {
        return $this->hasMany(Vendedor::class);   // ligação para vendedor, “has many” significa “tem muitos”
    }
}

<?php

namespace Chat;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table = 'estoques';

    protected $fillable = [
        'id',
        'nome',
        'cidade',
        'endereco',
    ];

    public function pecas() {
        return $this->hasMany(Pecas::class);
    }

}

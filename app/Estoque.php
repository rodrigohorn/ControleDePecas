<?php

namespace Chat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estoque extends Model
{
    use SoftDeletes;

    protected $table = 'estoques';

    protected $fillable = [  //“fillable” que indica quais os dados serão acessíveis:
        'id',
        'nome',
        'cidade',
        'endereco',
    ];

    protected $dates = ['deleted_at'];

    public function pecas() {
        return $this->hasMany(Pecas::class); // ligação para peças, “has many” significa “tem muitos”
    }

}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstoquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cidade');
            $table->string('endereco');
            $table->timestamps(); // cria dois campos que armazena data e hora e data e hora da ultima atualização
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()     // indica o que deve ser feito quando ocorre uma reversão
    {
        Schema::dropIfExists('estoques');
    }
}

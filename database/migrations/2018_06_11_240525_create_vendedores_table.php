<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->unsignedInteger('id_fornecedor');//adiciona um campo do tipo inteiro sem sinal, com o nome de “id_fornecedor” e cria um índice para ele

            $table->string('contato');
            $table->timestamps();

            $table->foreign('id_fornecedor')->references('id')->on('fornecedores'); //  cria uma chave estrangeira para o campo “id_fornecedor referenciando o campo “id” da tabela “fornecedores”


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendedores');
    }
}

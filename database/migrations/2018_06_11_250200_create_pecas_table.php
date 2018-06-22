<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pecas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->unsignedInteger('id_fornecedor');
            $table->unsignedInteger('id_estoque');
            $table->string('marca');
            $table->decimal('valor', 10, 2);
            $table->timestamps(); // cria o crate e update  no banco de dados

            $table->foreign('id_fornecedor')->references('id')->on('fornecedores'); // interligação
            $table->foreign('id_estoque')->references('id')->on('estoques');  // interligação
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pecas');
    }
}

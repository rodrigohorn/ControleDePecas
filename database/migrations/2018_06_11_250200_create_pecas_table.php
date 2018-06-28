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
            $table->timestamps();

            $table->foreign('id_fornecedor')->references('id')->on('fornecedores');
            $table->foreign('id_estoque')->references('id')->on('estoques');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pecas'); //indica o que deve ser feito quando acontece uma reversão
    }
}

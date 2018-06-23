<?php

use Illuminate\Database\Seeder;

class EstoquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estoques')->insert([
            'nome' => str_random(10),
            'cidade' => str_random(10),
            'endereco' => str_random(10)
        ]);

        factory('Chat\Estoque', 5)->create();
    }
}

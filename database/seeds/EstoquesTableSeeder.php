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
            'nome' => str_random(10)
        ]);
    }
}

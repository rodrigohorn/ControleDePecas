<?php

use Illuminate\Database\Seeder;

class VendedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendedores')->insert([
            'nome' => str_random(10)
        ]);
    }
}

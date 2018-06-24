<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(EstoquesTableSeeder::class);
        $this->call(FornecedoresTableSeeder::class); //é possível chamar as outras classes para semear a base

    }
}

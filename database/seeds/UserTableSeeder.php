<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        factory('Chat\User', 50)->create();
    }
}

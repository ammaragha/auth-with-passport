<?php

use Illuminate\Database\Seeder;
use App\Auther as aut;

class AutherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        aut::factory(5)->create();
    }
}

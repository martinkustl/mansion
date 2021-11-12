<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // heslo je "heslo"
        $user = ['id' => 1, 'name' => 'test', 'email' => 'test@test.com', 'password' => '$2y$10$7EaEVDmRISQauwBJ32nBHO1bJk7/YLJWpVowGsP4tgEvt07QiyNbi'];
        DB::table('users')->insert($user);
    }
}

<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>  'admin',
            'email' => 'yervandghukasyan@gmail.com',
            'password' => '$2y$10$FXhuupPti1F0/pa/AsW3P.jYZJ4wnBn5SBe/o1.6XxAUFFC.OzDYy',
        ]);
    }
}

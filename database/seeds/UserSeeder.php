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
            'name' => 'Navis Michael Bearly J',
            'email' => 'navis.programmer@gmail.com',
            'email_verified_at' => NULL,
            'password' => '$2y$10$j2cL.DYPCXvI9yrggesg6u3C56aO5h6OclLl1jWfhW20U0WBeXe/q', // lp$7Navis
            'remember_token' => NULL,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'image' => 'https://www.hamleys.in/media/catalog/product/cache/926507dc7f93631a094422215b778fe0/4/9/491603732-1.jpg',
                'title' => 'My doll',
                'description' => 'My doll is very beautiful',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Nao_Robot_%28Robocup_2016%29.jpg/405px-Nao_Robot_%28Robocup_2016%29.jpg',
            'title' => 'Robo',
            'description' => 'This is the Terminater 3 Robo',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}

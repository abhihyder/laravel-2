<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Post::class, 30)->create();
        // \App\Models\Post::create([
        //     'user_id'       =>1,
        //     'category_id'   =>1,
        //     'title'         =>'What is Lorem Ipsum?',
        //     'content'       =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        //     'thumbnail_image'=>'public/asset/img/16.01.20-09_18_18.jpg'
        // ]);
    }
}

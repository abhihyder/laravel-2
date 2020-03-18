<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Category::class, 3)->create();
        // \App\Models\Category::create([
        //     'name'   =>'World',
        //     'slug'   =>'world'
           
        // ]);
    }
}

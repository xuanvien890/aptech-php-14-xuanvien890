<?php

use Illuminate\Database\Seeder;
use App\News;
use Faker\Factory as Faker;
class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
for ($i=0;$i<10;$i++){
    News::create([
        'title' => $faker->sentence(),
        'slug' => $faker->slug,
        'short_description' => $faker->paragraph(),
        'full_content' => $faker->paragraphs(3, true), 
        'author' => $faker->name,
        'category' => $faker->colorName 
       
    ]);
}
    }
}

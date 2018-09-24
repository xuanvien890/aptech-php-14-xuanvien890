<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class BackesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 10;
        for($i=0;$i<$limit;$i++){
          DB::table('backes')->insert([
            'user' =>$faker->name,
            'email' =>$faker->email,
            'add' =>$faker->address,
            'pass' =>$faker->word,

        ]);
    }
}
}
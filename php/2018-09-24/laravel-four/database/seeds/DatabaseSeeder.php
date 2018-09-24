<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ShopesTableSeeder::class);
        $this->call(TencosTableSeeder::class);
        $this->call(CodesTableSeeder::class);
        $this->call(BackesTableSeeder::class);
    }
}

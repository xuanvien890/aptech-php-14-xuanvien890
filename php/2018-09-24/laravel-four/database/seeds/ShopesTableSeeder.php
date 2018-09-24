<?php

use Illuminate\Database\Seeder;

class ShopesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shopes')->insert([
           array ('name'=>'áo rin',
            'price'=>5000,
            'cate'=>2),
            array ('name'=>'áo kaki',
            'price'=>6000,
            'cate'=>4),
            array ('name'=>'áo bac',
            'price'=>7000,
            'cate'=>2),
            array ('name'=>'áo tata',
            'price'=>8000,
            'cate'=>2),
        ]);
    }
}

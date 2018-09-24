<?php

use Illuminate\Database\Seeder;

class TencosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){
            DB::table('tencos')->insert([
                'name'=>"thuc don".$i,
                'add'=>"do ba".$i,
                'list'=>"danh sach".$i,
            ]);
        }
    }
}

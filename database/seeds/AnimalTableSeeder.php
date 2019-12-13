<?php

use Illuminate\Database\Seeder;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animal')->insert([
            'name' => "Bon ",
            'gender'=>'Male',
            'age'=>11,
            'weight'=> 10,
            'size'=>35,
            'breed_id'=>2
        ]);

        DB::table('animal')->insert([
            'name' =>'Pilou',
            'gender'=>'Male',
            'age'=>15,
            'weight'=> 201,
            'size'=>124,
            'breed_id'=>1
        ]);
    }

}

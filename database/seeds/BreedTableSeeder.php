<?php

use Illuminate\Database\Seeder;

class BreedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breeds')->insert([
            'name' => 'Ours',
            'classification'=>'sauvage',
            'lifeExpectancy'=>"50",

        ]);

        DB::table('breeds')->insert([
            'name' => 'Chat',
            'classification'=>'domestique',
            'lifeExpectancy'=>"15",

        ]);

        DB::table('breeds')->insert([
            'name' => 'Chien',
            'classification'=>'domestique',
            'lifeExpectancy'=>"15",

        ]);

        DB::table('breeds')->insert([
            'name' => 'Dragon',
            'classification'=>'sauvage',
            'lifeExpectancy'=>"10000",

        ]);
    }
}

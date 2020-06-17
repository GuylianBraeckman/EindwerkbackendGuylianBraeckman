<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(['name' => 'FULL FACE HELMET','description'=>'Beschrijving FULL FACE HELMET' ]);
        DB::table('categories')->insert(['name' => 'MODULAR HELMET','description'=>'Beschrijving MODULAR HELMET' ]);
        DB::table('categories')->insert(['name' => 'HALF FACE HELMET','description'=>'Beschrijving HALF FACE HELMET' ]);

    }
}

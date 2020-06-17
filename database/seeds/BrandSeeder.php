<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->insert(['name' => 'ZEUS','description'=>'Beschrijving ZEUS' ]);
        DB::table('brands')->insert(['name' => 'NOLAN','description'=>'Beschrijving NOLAN' ]);
        DB::table('brands')->insert(['name' => 'CABERG','description'=>'Beschrijving CABERG' ]);


    }
}

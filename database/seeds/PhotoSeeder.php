<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('photos')->insert(['file'=>'helm4.png']);
        DB::table('photos')->insert(['file'=>'helm5.png']);
        DB::table('photos')->insert(['file'=>'helm6.png']);
        DB::table('photos')->insert(['file'=>'helm7.png']);
        DB::table('photos')->insert(['file'=>'helm8.png']);
        DB::table('photos')->insert(['file'=>'helm10.png']);
        DB::table('photos')->insert(['file'=>'bghome.jpg']);

    }
}

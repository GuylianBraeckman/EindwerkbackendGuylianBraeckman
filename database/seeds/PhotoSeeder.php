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
        DB::table('photos')->insert(['file'=>'1587710631adidas_gazelle.jpg','name'=>'test1']);
        DB::table('photos')->insert(['file'=>'1587710638adidas_superstar.jpg','name'=>'test2']);
        DB::table('photos')->insert(['file'=>'1587710651nike_performance.jpg','name'=>'test3']);
        DB::table('photos')->insert(['file'=>'1587711803adidas_originals.jpg','name'=>'test4']);
        DB::table('photos')->insert(['file'=>'1587797477lacoste_hemd.jpg','name'=>'test5']);
        DB::table('photos')->insert(['file'=>'1587711803adidas_originals.jpg','name'=>'test6']);
        DB::table('photos')->insert(['file'=>'bghome.jpg','name'=>'test1']);
    }
}

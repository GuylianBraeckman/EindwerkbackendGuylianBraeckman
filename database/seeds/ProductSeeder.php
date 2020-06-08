
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET fOREIGN_KEY_CHECKS=0;');
        DB::table('products')->insert(['category_id'=>'1', 'brand_id' => '1','photo_id'=>'1','name'=>'SCHOENEN GAZELLE',
            'description'=>'Beschrijving SCHOENEN GAZELLE','price'=> '99.99']);
        DB::table('products')->insert(['category_id'=>'1', 'brand_id' => '1','photo_id'=>'2','name'=>'SCHOENEN SUPERSTARS',
            'description'=>'Beschrijving SCHOENEN SUPERSTARS','color_id'=>'1','price'=> '199.99']);
        DB::table('products')->insert(['category_id'=>'3', 'brand_id' => '2','photo_id'=>'3','name'=>'SOKKEN NIKE PERFORMANCE',
            'description'=>'Beschrijving SOKKEN NIKE PERFORMANCE','color_id'=>'1','price'=> '29.00']);
        DB::table('products')->insert(['category_id'=>'3', 'brand_id' => '1','photo_id'=>'4','name'=>'SOKKEN ADIDAS ORIGINAL',
            'description'=>'Beschrijving SOKKEN ADIDAS ORIGINAL','color_id'=>'1','price'=> '19.00']);
        DB::table('products')->insert(['category_id'=>'2', 'brand_id' => '3','photo_id'=>'5','name'=>'LACOSTE HEMD',
            'description'=>'Beschrijving LACOSTE HEMD','color_id'=>'1','price'=> '59.00']);
        DB::statement('SET fOREIGN_KEY_CHECKS=1;');

    }
}

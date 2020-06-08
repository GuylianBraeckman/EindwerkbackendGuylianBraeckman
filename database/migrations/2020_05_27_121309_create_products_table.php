<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned()->index();
            $table->bigInteger('brand_id')->unsigned()->index();
            $table->bigInteger('photo_id')->unsigned()->index();
            $table->string('name');
            $table->string('description');
            $table->string('color_id')->unsigned()->index();
            $table->decimal('price')->default(0);
            $table->timestamps();

            /**Leg de relatie tussen product en de brand, categorie en photo tabel. Maak geen gebruik van cascade**/
            $table->unique(['category_id', 'brand_id','photo_id']);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

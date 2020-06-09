<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'category_id', //foreign key van de tabel die verwijst naar categories
        'brand_id', //foreign key van de tabel die verwijst naar brands
        'color_id',//foreign key van de tabel die verwijst naar het kleur
        'photo_id',//foreign key van de tabel die verwijst naar photos
        'name',
        'description',
        'price',


    ];

    public function photo(){
        return $this->belongsTo(Photo::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
}
    public function color(){
        return $this->belongsTo(Color::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}

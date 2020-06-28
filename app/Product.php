<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'category_id', //foreign key van de tabel die verwijst naar categories
        'brand_id', //foreign key van de tabel die verwijst naar brands
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

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}

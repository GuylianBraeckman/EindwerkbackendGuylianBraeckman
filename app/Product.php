<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'category_id', //foreign key van de tabel die verwijst naar categories
        'brand_id', //foreign key van de tabel die verwijst naar brands
        'photo_id',//foreign key van de tabel die verwijst naar photos
        'name',
        'description',
        'price',

    ];

    public function photo(){
        return $this->belongsTo
    }
}

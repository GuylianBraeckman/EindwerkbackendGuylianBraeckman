<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public $products = null;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->products = $oldCart->products;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;

        }
    }

    public function add($product, $product_id)
    {
        $shopItems = ['quantity' => 0, 'product_id' => 0, 'product_name' => $product->name, 'product_price' =>
            $product->price, 'product_image' =>$product->photo , 'product_description' =>
            $product->description, 'product' => $product];

        if ($this->products) {
            if (array_key_exists($product_id, $this->products)) {
                $shopItems = $this->products[$product_id];
            }
        }
        $shopItems['quantity']++;
        $shopItems['product_id'] = $product_id;
        $shopItems['product_name'] = $product->name;
        $shopItems['product_price'] = $product->price;
        $shopItems['product_image'] = $product->photo->file;
        $shopItems['product_description'] = $product->description;

        $this->totalQuantity++;
        $this->totalPrice += $product->price;
        $this->products[$product_id] = $shopItems;
    }

    public function updateQuantity($id, $quantity){
        //telt het totaal aantal items in de winkelwagen
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalQuantity += $quantity;

        if($this->products[$id]['quantity'] < $quantity){
            $this->totalPrice -= ($this->products[$id]['quantity']*$this->products[$id]['product_price']);
            $this->totalPrice += $quantity*$this->products[$id]['product_price'];
        }else{
            $this->totalPrice -= ($this->products[$id]['quantity']-$quantity)*$this->products[$id]['product_price'];
        }
        $this->products[$id]['quantity'] = $quantity;
    }

    public function removeItem($id){
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -= ($this->products[$id]['quantity']*$this->products[$id]['product_price']);
        unset($this->products[$id]);
    }
}

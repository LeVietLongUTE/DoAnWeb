<?php 
namespace App;
class Cart {
    public $products  = null;
    public $totalPrice = 0;


    public function __constant($cart)
    {
        if ($cart) {
            $this->products= $cart->products;
            $this->totalPrice = $cart->totalPrice;
        }
    }
    
    public function AddCart($product, $id) {
        $newProduct  = ['productInfo' => $product, 'price' => $product->price];
        if ($this->products) {
            if (array_key_exists($id, $products)){
                $newProduct = $products[$id];
            }
        }

    }
}




?>
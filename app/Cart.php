<?php


namespace App;


class Cart
{
    public $items = [];
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQuantity = $oldCart->totalQuantity;
        }
    }

    public function add($product)
    {
        $storeItem = [
            'item' => $product,
            'quantity' => 0,
            'price' => 0
        ];

        if (array_key_exists($product->id, $this->items)) {
            $storeItem = $this->items[$product->id];
        }

        $storeItem['quantity']++;
        $storeItem['price'] += $product->price;
        $this->items[$product->id] = $storeItem;

        $this->totalQuantity++;
        $this->totalPrice += $product->price;


    }
}

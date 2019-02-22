<?php

namespace App;

class Cart
{
    private $data = [
        // ['name' => 'ProducrA', 'price' => 1],
        // ['name' => 'ProducrB', 'price' => 2],
        // ['name' => 'ProducrC'],
        // ['name' => 'ProducrD', 'price' => 4]
    ];

    public function add($product)
    {
        array_push($this->data, $product);
    }

    public function getTotal()
    {
        return array_reduce($this->data, function ($carry, $item) {
            if (isset($item['price'])) {
                return $carry + $item['price'];
            }

            return $carry;
        }, 0);
    }

    public function countProducts()
    {
        return count($this->data);
    }

    public function getProducts()
    {
        return $this->data;
    }
}

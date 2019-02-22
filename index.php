<?php
require __DIR__.'/vendor/autoload.php';

$cart = new App\Cart;

// 增加商品
fwrite(STDOUT, 'Enter Product(Ex: 名稱 價格):');
$input = trim(fgets(STDIN));

if ($input) {
    list($name, $price) = explode(' ', $input);
    if ($name) {
        $cart->add(['name' => $name, 'price' => $price ?? 0]);
    }
}

// 計算總價
$sum  = $cart->getTotal();
var_dump("總價: $$sum");

// 回傳商品總數
$count  = $cart->countProducts();
var_dump("商品總數: $count");

// 取的購物車列表
// var_dump($cart->getProducts());

<?php
/*
 * Constructor Property Promotion
    ● Kadang kita sering sekali membuat property sekaligus mengisi property tersebut menggunakan
    constructor
    ● Sekarang kita bisa otomatis langsung membuat property dengan via constructor
    ● Fitur ini mirip sekali di bahasa pemrograman seperti Kotlin dan TypeScript
    ● https://wiki.php.net/rfc/constructor_promotion
 */

class Product {
    //cara lama dan tidak efisien
    // public string $id;
    // public string $name;
    // public int $price;
    // public int $quantity;

    // public function __construct(string $id, string $name, int $price, int $quantity)
    // {
    //     $this->id = $id;
    //     $this->name = $name;
    //     $this->price = $price;
    //     $this->quantity = $quantity;
    // }

    //cara baru cukup menambahkan kata kunci visibility di constructor parameter maka secara akan dipromote menjadi property
    public function __construct(
        public string $id, 
        public string $name, 
        public int $price = 0, 
        public int $quantity = 0, 
        private bool $expensive = false)
    {
    }
}

$product = new Product(id: "1", name: "Pensil", price: 2500);
var_dump($product);

echo $product->name. PHP_EOL;
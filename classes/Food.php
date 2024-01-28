<?php 
require_once __DIR__ . '/Product.php';

class Food extends Product{
    public $vitamins;
    public $proteins;
    public $additives;

    public function __construct(string $_name, string $_description, float $_price, Category $_category , string $_vitamins, string $_proteins, string $_additives)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->category = $_category;
        $this->vitamins = $_vitamins;
        $this->proteins = $_proteins;
        $this->additives = $_additives;
}
}



?>
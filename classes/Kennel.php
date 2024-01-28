<?php 

class Kennel extends Product{
    public $size;
    public $color;
    public $material;

    public function __construct(string $_name, string $_description, float $_price, Category $_category , string $_size, string $_color, string $_material)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->category = $_category;
        $this->size = $_size;
        $this->color = $_color;
        $this->material = $_material;
}
}




?>
<?php 
require_once __DIR__ . '/Product.php';

class Toy extends Product{
    public $size;
    public $color;
    public $material;

    //prendo tutte le info Product e aggiungo info di Toy
    public function __construct(string $_image, string $_name, string $_description, float $_price, Category $_category , string $_size, string $_color, string $_material)
    {   
        //richiamo i costruttori di product
        parent :: __construct($_image,$_name,$_description,$_price,$_category);

        //aggiungo info Toy
        $this->size = $_size;
        $this->color = $_color;
        $this->material = $_material;
}


}




?>






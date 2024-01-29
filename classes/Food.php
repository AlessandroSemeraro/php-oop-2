<?php 
require_once __DIR__ . '/Product.php';

class Food extends Product{
    public $vitamins;
    public $proteins;
    public $additives;
    
    //prendo tutte le info Product e aggiungo info di Food
    public function __construct(string $_image, string $_name, string $_description, float $_price, Category $_category , string $_vitamins, string $_proteins, string $_additives)

    {   //richiamo i costruttori di product
        parent :: __construct($_image,$_name,$_description,$_price,$_category);

        //aggiungo info Food
        $this->vitamins = $_vitamins;
        $this->proteins = $_proteins;
        $this->additives = $_additives;
}

}



?>
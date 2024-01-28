<?php 
/**
 * this class generates a Product
 */
class Product {
    public $name;
    public $description;
    public $price;
    public $image;

    /**
     * Construct as a new Product
     *
     * @param string $name  name product
     * @param string $description description
     * @param float $price  price ticket
     * @param [type] $image
     */
    public function __construct(string $name , string $description, float $price, $image) {
        $this -> name= $name;
        $this -> description = $description;
        $this-> price = $price;
        $this-> image = $image;
    }

    public function getLenghtDescription(){
        return strlen ($this -> description);
    }

    public function getPrice(){
        return ceil ($this -> price);
    }


    
}

     
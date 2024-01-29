<?php 
/**
 * this class generates a Product
 */
class Product {
    public $image;
    public $name;
    public $description;
    public $price;
    public $category;
   

    /**
     * Construct as a new Product
     * @param string $image image
     * @param string $name  name product
     * @param string $description description
     * @param float $price  price ticket
     * @param [type] $image
     */
    public function __construct(string $_image, string $_name , string $_description, float $_price, Category $_category ) {
        $this -> image = $_image;
        $this -> name= $_name;
        $this -> description = $_description;
        $this -> price = $_price;
        $this -> category = $_category;
    } 

    public function getPrice(){
        return ceil ($this -> price);
    }

   


    
}

     
<?php 
/**
 * this class generates a Product
 */
class Product {
    public $name;
    public $description;
    public $price;
    public $category;
    public $image;

    /**
     * Construct as a new Product
     *
     * @param string $name  name product
     * @param string $description description
     * @param float $price  price ticket
     * @param [type] $image
     */
    public function __construct(string $image, string $name , string $description, float $price, Category $category ) {
        $this -> image = $image;
        $this -> name= $name;
        $this -> description = $description;
        $this-> price = $price;
        $this-> category = $category;
    }   

    public function getLenghtDescription(){
        return strlen ($this -> description);
    }

    public function getPrice(){
        return ceil ($this -> price);
    }


    
}

     
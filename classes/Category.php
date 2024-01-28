<?php

class Category{
    public $name; //animal type (cani o gatti)
    /**
     * Constructs a new instance of type Category, given a name, a description and an optional image string url.
     *
     * @param string $_name Category's name
     * 
     */
    public function __construct(string $_name){
        $this->name = $_name;
    }
}
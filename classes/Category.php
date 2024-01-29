<?php

class Category{
    public $name; //animal type (cani o gatti)
    public $icon; //icon Url
    /**
     * Constructs a new instance of type Category, given a name, a description and an optional image string url.
     *
     * @param string $_name Category's name
     * @param string $_icon iconUrl
     */
    public function __construct(string $_name, string $_icon){
        $this->name = $_name;
        $this->icon = $_icon;
    }
}
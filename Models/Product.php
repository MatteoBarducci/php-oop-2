<?php
class Product {

    public $name;
    public $price;
    public $category;
    public $description;

    public function __construct($_name, $_category, $_price){
        $this->name = $_name;
        $this->category = $_category;
        $this->price = $_price;
    }

}
?>
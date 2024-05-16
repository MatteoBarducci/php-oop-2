<?php
require_once __DIR__ . '/Product.php';

class Food extends Product {

    public $weight;
    public $calories;
    public $ingredients;

    public function __construct($_name, $_price, $_category, $_weight, $_calories, $_ingredients,){
        parent::__construct($_name, $_price, $_category);
        $this->weight = $_weight;
        $this->calories = $_calories;
        $this->ingredients = $_ingredients;
    }

}

?>
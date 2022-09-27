<?php
include_once __DIR__ . '/Product.php';

class Food extends Product 
{
    public $brand;
    public $description;
    public $weight;

    public function __construct($param, string $brand, string $description, string $weight)
    {
        parent::__construct($param);
        $this->brand = $brand;
        $this->description = $description;
        $this->weight = $weight;
    }
}

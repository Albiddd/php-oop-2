<?php
include_once __DIR__ . '/Product.php';

class Toy extends Product 
{
    public $brand;
    public $description;
    public $material;

    public function __construct($param, string $brand, string $description, string $material)
    {
        parent::__construct($param);
        $this->brand = $brand;
        $this->description = $description;
        $this->material = $material;
    }
}

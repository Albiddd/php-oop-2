<?php
include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/material.php';

class Toy extends Product 
{
    use Material;

    public $brand;
    public $description;
 

    public function __construct(string $prodName, int $prodId, float $prodPrice, string $prodCat, string $brand, string $description, string $material)
    {
        parent::__construct($prodName, $prodId, $prodPrice, $prodCat);
        $this->brand = $brand;
        $this->description = $description;
        $this->material = $material;
    }
}

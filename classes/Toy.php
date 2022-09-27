<?php
include_once __DIR__ . '/Product.php';

class Toy extends Product 
{
    public $brand;
    public $description;
    public $material;

    public function __construct(string $prodName, int $prodId, float $prodPrice, string $prodCat, string $brand, string $description, string $material)
    {
        parent::__construct($prodName, $prodId, $prodPrice, $prodCat);
        $this->brand = $brand;
        $this->description = $description;
        $this->material = $material;
    }
}

<?php
include_once __DIR__ . '/Product.php';

class Food extends Product 
{
    public $brand;
    public $description;
    public $weight;

    public function __construct(string $prodName, int $prodId, float $prodPrice, string $prodCat, string $brand, string $description, string $weight)
    {
        parent::__construct($prodName, $prodId, $prodPrice, $prodCat);
        $this->brand = $brand;
        $this->description = $description;
        $this->weight = $weight;
    }
}

<?php
include_once __DIR__ . '/Product.php';

class Accessory extends Product 
{
    public $brand;
    public $description;
    public $type;
    public $color;

    public function __construct(string $prodName, int $prodId, float $prodPrice, string $prodCat, string $brand, string $description, string $type, string $color)
    {
        parent::__construct($prodName, $prodId, $prodPrice, $prodCat);
        $this->brand = $brand;
        $this->description = $description;
        $this->type = $type;
        $this->color = $color;
    }
}

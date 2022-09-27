<?php
include_once __DIR__ . '/Product.php';

class Accessory extends Product 
{
    public $brand;
    public $description;
    public $material;
    public $color;

    public function __construct($param, string $brand, string $description, string $material, string $color)
    {
        parent::__construct($param);
        $this->brand = $brand;
        $this->description = $description;
        $this->material = $material;
        $this->color = $color;
    }
}

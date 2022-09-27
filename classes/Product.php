<?php

class Product
{
    public $prodName;
    public $prodId;
    public $prodPrice;
    public $prodImg;
    public $prodCat;


    // function __construct(string $prodName, int $prodId, float $prodPrice, string $prodImg, string $prodCat)
    function __construct($param)
    {
        $this->prodName = $param['prodName'];
        $this->prodId = $param['prodId'];
        $this->prodPrice = $param['prodPrice'];
        $this->prodImg = $param['prodImg'];
        $this->prodCat = $param['prodCat'];
    }

    public function getProdName()
    {
        return $this->prodName;
    }   
}
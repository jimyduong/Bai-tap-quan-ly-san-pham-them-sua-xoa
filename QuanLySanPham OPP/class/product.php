<?php


class product
{

    private $productName;
    private $Price;
    private $idProduct;

    public function __construct($name, $price,$idProduct='')
    {

        $this->productName = $name;
        $this->Price = $price;
        $this->idProduct = $idProduct;

    }


    public function getName()
    {
        return $this->productName;
    }

    public function getPrice()
    {
        return $this->Price;
    }
    public function getIdProduct(){
        return $this->idProduct;
    }
}
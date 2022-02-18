<?php

namespace Models;

class Orderlines
{
    private $id;
    private $id_product;
    private $quantity;
    private $price;
    private $id_order;
    
    public function getId():string
    {
        return $this->id;
    }
    
    public function setId(string $id)
    {
        $this->id = $id;
    }
    
    public function getIdProduct():string
    {
        return $this->id_product;
    }
    
    public function setIdProduct(string $id_product)
    {
        $this->id_product = $id_product;
    }
    
    public function getIdOrder():string
    {
        return $this->id_order;
    }
    
    public function setIdOrder(string $id_order)
    {
        $this->id_order = $id_order;
    }
    
    public function getPrice():string
    {
        return $this->price;
    }
    
    public function setPrice(string $price)
    {
        $this->price = $price;
    }
    
    public function getQuantity():string
    {
        return $this->quantity;
    }
    
    public function setQuantity(string $quantity)
    {
        $this->quantity = $quantity;
    }
}
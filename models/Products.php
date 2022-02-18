<?php
namespace Models;

class Products
{
    private $id;
    private $name;
    private $price;
    private $description;
    private $img;
    private $stock;
    private $promote;
    private $date;
    
    public function getId():int
    {
        return $this->id;
    }
    
    public function setId(int $id)
    {
        $this->id = $id;
    }
    
    public function getName():string
    {
        return $this->name;
    }
    
    public function setName(string $name)
    {
        $this->name = $name;
    }
    
    public function getPrice():string
    {
        return $this->price;
    }
    
    public function setPrice(string $price)
    {
        $this->price = $price;
    }
    
    public function getDescription():string
    {
        return $this->description;
    }
    
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
    
    public function getImg():string
    {
        return $this->img;
    }
    
    public function setImg(string $img)
    {
        $this->img = $img;
    }
    
    public function getStock():string
    {
        return $this->stock;
    }
    
    public function setStock(string $stock)
    {
        $this->stock = $stock;
        
    }
    
    public function getPromote():string
    {
        return $this->promote;
    }
    
    public function setPromote(string $promote)
    {
        $this->promote = $promote;
    }
    
    public function getDate():string
    {
        return $this->date;
    }
    
    public function setDate(string $date)
    {
        $this->date = $date;
    }
}
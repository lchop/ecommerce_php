<?php

namespace Models;

class Basket
{
    private $id;
    private $date;
    private $id_member;
    private $id_product;
    private $quantity;
    private $statut;
    private $ip;
    
    
    public function getId(): int
    {
        return $this->id;
    }
    
    public function setId(int $id)
    {
        $this->id = $id;
    }
    
    public function getIdProduct():int
    {
        return $this->id_product;
    }
    
    public function setIdProduct(int $id_product)
    {
        $this->id_product = $id_product;
    }
    
    public function getIdMember():int
    {
        return $this->id_member;
    }
    
    public function setIdMember(int $id_member)
    {
        $this->id_member = $id_member;
    }
    
    public function getQuantity():int
    {
        return $this->quantity;
    }
    
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }
    
     public function getStatut():string
    {
        return $this->statut;
    }
    
    public function setStatut(string $statut)
    {
        $this->statut = $statut;
    }
    
    public function getIp():string
    {
        return $this->ip;
    }
    
    public function setIp(string $ip)
    {
        $this->ip = $ip;
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
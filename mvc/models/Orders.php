<?php

namespace Models;

class Orders
{
    private $id;
    private $id_member;
    private $statut;
    private $date;
    
    public function getId():string
    {
        return $this->id;
    }
    
    public function setId(string $id)
    {
        $this->id = $id;
    }
    
    public function getStatut():string
    {
        return $this->statut;
    }
    
    public function setStatut(string $statut)
    {
        $this->statut = $statut;
    }
    
    public function getIdMember():string
    {
        return $this->id_member;
    }
    
    public function setIdMember(string $id_member)
    {
        $this->id_member = $id_member;
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
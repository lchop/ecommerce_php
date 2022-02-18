<?php

namespace Models;

class Members
{
    private $id;
    private $email;
    private $firstname;
    private $lastname;
    private $address;
    private $postalCode;
    private $town;
    private $tel;
    private $isAdmin;
    private $passworld;
    
    public function getId():int
    {
        return $this->id;
    }
    
    public function setId(int $id)
    {
        $this->id = $id;
    }
    
    public function getEmail():string
    {
        return $this->email;
    }
    
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    
    public function getFirstname():string
    {
        return $this->firstname;
    }
    
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }
    
    public function getLastname():string
    {
        return $this->lastname;
    }
    
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }
    
    public function getAddress():string
    {
        return $this->address;
    }
    
    public function setAddress(string $address)
    {
        $this->address = $address;
    }
    
    public function getPostCode():string
    {
        return $this->postCode;
    }
    
    public function setPostCode(string $postCode)
    {
        $this->postCode = $postCode;
    }
    
    public function getTown():string
    {
        return $this->town;
    }
    
    public function setTown(string $town)
    {
        $this->town = $town;
    }
    
    public function getTel():string
    {
        return $this->tel;
    }
    
    public function setTel(string $tel)
    {
        $this->tel = $tel;
    }
    
    public function getIsAdmin():bool
    {
        return $this->isAdmin;
    }
    
    public function setIsAdmin(string $isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }
    
    public function getPassworld():string
    {
        return $this->passworld;
    }
    
    public function setPassworld(string $passworld)
    {
        $this->passworld = $passworld;
    }
}
<?php

namespace Controllers;

class Controller
{
    protected $date;
    //méthode qui affiche la page d'accueil
    public function __construct()
    {
        $this->date = date("Y/m/d");
    }
}
<?php

namespace Controllers;

class ProductsController extends Controller
{
    //méthode qui affiche la page d'accueil
    public function display()
    {
        //aller chercher les données dont elle a besoin
        
        $manager = new \Models\ProductsManager();
        $products = $manager->findAll();
        
        //les envoyer à la vue
        $template = "products.phtml";
        
        include "views/layout.phtml";
    }
}
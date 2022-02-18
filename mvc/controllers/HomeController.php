<?php
namespace Controllers;

class HomeController extends Controller
{
    //méthode qui affiche la page d'accueil
    public function display()
    {
        //aller chercher les données dont elle a besoin
        
        $manager = new \Models\ProductsManager();
        $products = $manager->findPromote();
        
        //les envoyer à la vue
        $template = "home.phtml";
        
        include "views/layout.phtml";
    }
}
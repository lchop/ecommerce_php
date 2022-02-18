<?php

namespace Controllers;

class ProductController extends Controller
{
    use Basket;
    public function __construct(){
        if(isset($_GET['action'])){
            if ($_GET['action'] === 'addbasket'){
                if (!isset($_SESSION['id_member']))
                    $id_member = 0;
                else
                    $id_member = $_SESSION['id_member'];
                $this->addToBasket($id_member,$_GET['id']);
                $_SESSION['basket'] = $this->countBasket($id_member);
            }
        }
    }
    //méthode qui affiche la page d'accueil
    public function display()
    {
        $manager = new \Models\ProductsManager();
        $product = $manager->findByID($_GET['id']);
        
        //les envoyer à la vue
        $template = "product.phtml";
        
        include "views/layout.phtml";
    }
}
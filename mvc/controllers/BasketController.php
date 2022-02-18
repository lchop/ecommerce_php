<?php

namespace Controllers;

class BasketController extends Controller
{
    use Basket;
     
    public function display(){
        if (!isset($_SESSION['id_member']))
            $id_member = 0;
        else
            $id_member = $_SESSION['id_member'];
            
        $count = $this->countBasket($id_member);
        
        $managerProducts = new \Models\ProductsManager();
        $products = array();
        
        $managerBasket = new \Models\BasketManager();
        $basket = $managerBasket->getBasket($id_member);
        
        foreach($basket as $item)
        {
            array_push($products,$managerProducts->findByID($item->getIdProduct()));
        }
/*        var_dump($products);*/
        
         //les envoyer à la vue
        $template = "basket.phtml";
        
        include "views/layout.phtml";
    }
    

}
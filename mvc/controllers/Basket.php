<?php

namespace Controllers;

Trait Basket
{
    public function addtoBasket($id_member,$id_product){
        $managerBasket = new \Models\BasketManager();
        $managerBasket->addToBasket($id_member,$id_product);
    }
    
    public function removeFromBasket($product){
        $manager = new \Models\BasketManager();
        $manager->removeBasket($product);
    }
    
    public function countBasket($id_member) : int{
        $manager = new \Models\BasketManager();
        return count($manager->getBasket($id_member));
    }
}
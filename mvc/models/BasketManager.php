<?php

namespace Models;

class BasketManager
{
    public function getBasket($id_member)
    {
        //connexion à la base de données
        $db = new \Configs\Database();
        $pdo = $db->db_connect();
        
        //préparation de la requête
        $query = $pdo->prepare("SELECT * FROM basket WHERE id_member=$id_member");
        
        //exécution de la requête
        $query->execute();
        
        //récupération et le renvoi des données
        return $query->fetchAll(\PDO::FETCH_CLASS,'Models\Basket');
    }
    
    public function addToBasket($id_member,$id_product)
    {
        $db = new \Configs\Database();
        $pdo = $db->db_connect();
        
        //préparation de la requête
        $query = $pdo->prepare("INSERT INTO basket (id, date, id_member, id_product, ip, quantity, statut) 
                                VALUES (?,?, ?, ?, ?, ?, ?)");
        $query->execute(array(0, date("Y/m/d") , $id_member , $id_product ,"", 1, "ok"));
    }
    
    
}
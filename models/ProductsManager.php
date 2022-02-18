<?php
namespace Models;
class ProductsManager
{
    public function findAll()
    {
        //connexion à la base de données
        $db = new \Configs\Database();
        $pdo = $db->db_connect();
        
        //préparation de la requête
        $query = $pdo->prepare("SELECT * FROM products");
        
        //exécution de la requête
        $query->execute();
        
        //récupération et le renvoi des données
        return $query->fetchAll(\PDO::FETCH_CLASS,'Models\Products');
    }
    
    public function findPromote()
    {
        //connexion à la base de données
        $db = new \Configs\Database();
        $pdo = $db->db_connect();
        
        //préparation de la requête
        $query = $pdo->prepare("SELECT * FROM products WHERE promote=1");
        
        //exécution de la requête
        $query->execute();
        
        //récupération et le renvoi des données
        return $query->fetchAll(\PDO::FETCH_CLASS,'Models\Products');
    }
    
    public function findByID($id)
    {
        //connexion à la base de données
        $db = new \Configs\Database();
        $pdo = $db->db_connect();
        
        //préparation de la requête
        $query = $pdo->prepare("SELECT * FROM products WHERE id=?");
        
        //exécution de la requête
        $query->execute(array($id));
        
        //récupération et le renvoi des données
        return $query->fetchAll(\PDO::FETCH_CLASS,'Models\Products');
    }
}
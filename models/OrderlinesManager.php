<?php
namespace Models;

class OrderlinesManager
{
    public function findAll()
    {
        //connexion à la base de données
        $db = new \Configs\Database();
        $pdo = $db->db_connect();
        
        //préparation de la requête
        $query = $pdo->prepare("SELECT * FROM orderlines");
        
        //exécution de la requête
        $query->execute();
        
        //récupération et le renvoi des données
        return $query->fetchAll(\PDO::FETCH_CLASS,'Models\Orderlines');
    }
}
<?php

namespace Models;

class MembersManager
{
    public function findAll()
    {
        //connexion à la base de données
        $db = new \Configs\Database();
        $pdo = $db->db_connect();
        
        //préparation de la requête
        $query = $pdo->prepare("SELECT * FROM members");
        
        //exécution de la requête
        $query->execute();
        
        //récupération et le renvoi des données
        return $query->fetchAll(\PDO::FETCH_CLASS,'Models\Members');
    }
    
    public function createAccount($user){
        //connexion à la base de données
        $db = new \Configs\Database();
        $pdo = $db->db_connect();
        
        //préparation de la requête
        $query = $pdo->prepare("INSERT INTO Membres (firstname, lastname, email, passworld, address, town, postalCode, tel, isAdmin) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                                
        $query->execute(array($user->getFirstname(), $user->getLastname(),$user->getEmail(), $user->getPassworld(),"","", "","",0));
    }
    
     public function checkLogIn($user){
        //connexion à la base de données
        $db = new \Configs\Database();
        $pdo = $db->db_connect();
        
        //préparation de la requête
        $query = $pdo->prepare("SELECT * FROM Membres WHERE email=?");
        
        $query->execute(array($user->getEmail()));
        
        return $query->fetchAll(\PDO::FETCH_CLASS,'Models\Members');
     }
}
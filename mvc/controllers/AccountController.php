<?php

namespace Controllers;

class AccountController extends Controller
{
    use Basket;
    
     public function __construct(){
        if(!empty($_POST)){
            if (count($_POST)>3){
                $this->createAccount();
            }
            else{
                $this->logIn();
            }
        }
     }
     
    public function createAccount(){
        $membres = new \Models\Members;
        $membres->setEmail($_POST['Email']);
        $membres->setFirstname($_POST['Nom']);
        $membres->setLastname($_POST['Prenom']);
        $membres->setPassworld(password_hash($_POST['Passworld'],PASSWORD_BCRYPT));
        
        $manager = new \Models\MembersManager();
        $manager->createAccount($membres);
    }
    
    public function logIn(){
        $membres = new \Models\Members;
        $membres->setEmail($_POST['Email']);
        $membres->setPassworld($_POST['Passworld']);
        
        $manager = new \Models\MembersManager($membres);
        $testUser = $manager->checkLogIn($membres);
        
        if (count($testUser)>0){
            $result = password_verify($membres->getPassworld(),$testUser[0]->getPassworld());
            if ($result)
            {
                $_SESSION['login'] = true;
                $_SESSION['email'] = $testUser[0]->getEmail();
                $_SESSION['id_member'] = $testUser[0]->getId();
                $_SESSION['basket'] = $this->countBasket($testUser[0]->getId());
            }
            else
            {
                var_dump("WRONG PASSWORLD");
            }
        }
        else
        {
            var_dump("NOT a members");
        }
    }
    
    //méthode qui affiche la page d'accueil
    public function display()
    {
        //aller chercher les données dont elle a besoin
        
        $form = new \Services\Form;
        $form->startForm()
            ->addLabelFor('nom', 'Nom')
            ->addInput('nom', 'Nom')
            ->addLabelFor('prenom', 'Prenom')
            ->addInput('prenom', 'Prenom')
            ->addLabelFor('email', 'Email')
            ->addInput('email', 'Email')
            ->addLabelFor('passworld', 'Passworld')
            ->addInput('passworld', 'Passworld')
            ->addLabelFor('createAccount', 'createAccount')
            ->addButton('createAccount')
            ->endForm()
        ;
        $accountCreationForm = "";
        $accountCreationForm = $form->render();
        
        
        
        $form->clear();
        $form->startForm()
            ->addLabelFor('email', 'Email')
            ->addInput('email', 'Email')
            ->addLabelFor('passworld', 'Passworld')
            ->addInput('passworld', 'Passworld')
            ->addLabelFor('sign-in', 'Sign in')
            ->addButton('Sign in')
            ->endForm()
        ;
        $accountSignInForm = "";
        $accountSignInForm = $form->render();
        
        //les envoyer à la vue
        $template = "account.phtml";
        
        include "views/layout.phtml";
    }
}
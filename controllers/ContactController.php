<?php

namespace Controllers;

class ContactController extends Controller
{
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
            ->addLabelFor('contact', 'Contact')
            ->addTextArea('contact', 'Contact')
            ->addLabelFor('submit', 'Submit')
            ->addButton('submit')
            ->endForm()
        ;
        $contactForm = "";
        $contactForm = $form->render();
        
        //les envoyer à la vue
        $template = "contact.phtml";
        
        include "views/layout.phtml";
    }
}
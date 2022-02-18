<?php
session_start();

spl_autoload_register(function ($class) {
    include lcfirst(str_replace('\\','/',$class)).".php";
});

if(isset($_GET['page'])){
    //tester les différentes valeurs du paramètre
    switch($_GET['page'])
    {
        case 'contact':
            $controller = new \Controllers\ContactController();
            $controller -> display();
            break;
            
        case 'products':
            $controller = new \Controllers\ProductsController();
            $controller -> display();
            break;
            
        case 'product':
            $controller = new \Controllers\ProductController();
            $controller -> display();
            break;
            
        case 'account':
            $controller = new \Controllers\AccountController();
            $controller -> display();
            break;
        
        case 'basket':
            $controller = new \Controllers\BasketController();
            $controller -> display();
            break;
    }
}
//sinon on veut afficher l'accueil
else
{
    $controller = new \Controllers\HomeController();
    $controller -> display();
}
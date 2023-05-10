<?php 
 
 declare(strict_types=1);
 
require_once __DIR__ . "/../vendor/autoload.php";
 use App\Router;
 
 $router = new Router();
 
 $router->get("/", function(){
    echo "Home Page";
 });
 $router->get("/about", function(){
    echo "about page";
 });

 $router->get("/contact", function(){
    require_once __DIR__ . "/../views/contact.phtml";
 });

 $router->addNotFoundHandler(function(){
    $title = "404 Not Found";
    require_once __DIR__ . "/../views/404.phtml";
 });


 $router->run();
 ?>
 
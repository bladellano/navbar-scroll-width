<?php

require 'inc/config.php';
require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get(
    '/',
    function () {
        require_once("view/index.php");
    }
);

$app->get(
    '/proposta-pedagogica',
    function (){
        require_once("view/proposta-pedagogica.php");   
    }
);

$app->get(
    '/produtos',
    function (){
       $sql = new Sql(); 
       $data = $sql->select("SELECT * FROM tb_usuarios");
       echo json_encode($data);
   }
);

$app->run();

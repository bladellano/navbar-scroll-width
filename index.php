<?php

// header("Content-type: application/json; charset=utf-8");

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


$app->get('/assessoria',function (){require_once("view/assessoria.php");});
$app->get('/consultoria',function (){require_once("view/consultoria.php");});
$app->get('/cursos-on-line',function (){require_once("view/cursos-on-line.php");});

$app->post(
	'/inserindo-inscricao',
	function (){
		$sql = new Sql(); 
		$dados = $_POST;
		foreach($dados as $k => $d){
			$dados[$k] = "'$d'";
		}	
		$data = $sql->insert("INSERT INTO tb_inscritos (".implode(',',array_keys($dados)).") 
			VALUES (".implode(',',array_values($dados)).")");
		$n_inscricao = $sql->get_last_id();
		if($data){
			echo json_encode(['success'=>true,'msg'=>'Inscrição realizada com sucesso! Seu número de inscrição é 000'.$n_inscricao]);
		} else {
			echo json_encode(['success'=>false,'msg'=>'Falha na inscrição.']);
		}
	}
);

/*
$app->get(
	'/teste',
	function (){
		$sql = new Sql(); 
		$data = $sql->select("SELECT * FROM tb_inscritos");
		echo json_encode($data);
	}
);*/

$app->run();

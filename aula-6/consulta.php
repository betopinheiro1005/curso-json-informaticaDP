<?php

header('Content-Type: application/json; charset=utf-8');

include_once 'conexao.php';
$con = new Conexao;
$conexao = $con->Conectar();

$consulta = "SELECT * FROM pessoas";
$resultado = $conexao->prepare($consulta);
$resultado->execute();
$data = $resultado->fetchAll(PDO::FETCH_ASSOC);

print json_encode($data, JSON_UNESCAPED_UNICODE);
// var_dump($data);

$conexao=null;

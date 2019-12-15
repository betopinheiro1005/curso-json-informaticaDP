<?php

//string json contendo os dados de um funcionário
$json_str = '{"nome":"Jason Jones", "idade":38, "sexo": "M"}';
 
//faz o parsing na string, gerando um objeto PHP
$obj = json_decode($json_str);

echo "json_decode()<br />";
echo "=============================================================<br />";
echo "Tipo de dados antes da conversão: " . gettype($json_str)."<br />";
echo "Tipo de dados depois da conversão: " . gettype($obj)."<br />";
echo "=============================================================<br />";

//imprime o conteúdo do objeto 
echo "nome: $obj->nome<br>"; 
echo "idade: $obj->idade<br>"; 
echo "sexo: $obj->sexo<br>"; 

?>


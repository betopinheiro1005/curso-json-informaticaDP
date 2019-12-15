<?php

if (!isset($myObj)) {
    $myObj = new stdClass();
}

echo "<h2>json.encode()</h2>";

// json_encode() - objeto PHP para JSON

$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo "<br>" . $myJSON . "<br>";

echo "=============================================================<br />";
echo "Tipo de dados antes da conversão: " . gettype($myObj)."<br />";
echo "Tipo de dados depois da conversão: " . gettype($myJSON)."<br />";
echo "=============================================================<br />";

// json_encode() - array simples para JSON

$cores = array('vermelho', 'verde', 'azul', 'amarelo', 'branco');

$myJSON = json_encode($cores);

echo "<br>" . $myJSON . "<br>";

echo "=============================================================<br />";
echo "Tipo de dados antes da conversão: " . gettype($cores)."<br />";
echo "Tipo de dados depois da conversão: " . gettype($myJSON)."<br />";
echo "=============================================================<br />";

// json_encode() - array associativo para JSON

$produto = array("categoria" => "celular", "cor" => "preto", "marca" => "Samsung", "modelo" => "S8", "preco" => 1000);

$myJSON = json_encode($produto);

echo "<br>" . $myJSON . "<br>";

echo "=============================================================<br />";
echo "Tipo de dados antes da conversão: " . gettype($cores)."<br />";
echo "Tipo de dados depois da conversão: " . gettype($myJSON)."<br />";
echo "=============================================================<br />";


// json_encode() - array associativo com palavras acentudadas para JSON

$pessoa = array("nome" => "José", "sobrenome" => "Guimarães", "profissão" => "metalúrgico");

$myJSON = json_encode($pessoa, JSON_UNESCAPED_UNICODE);

echo "<br>" . $myJSON . "<br>";

echo "=============================================================<br />";
echo "Tipo de dados antes da conversão: " . gettype($pessoa)."<br />";
echo "Tipo de dados depois da conversão: " . gettype($myJSON)."<br />";
echo "=============================================================<br />";

?>
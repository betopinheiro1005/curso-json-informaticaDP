<?php

class Conexao{
	public static function Conectar() {
		define("servidor", "localhost");
		define("nome_bd", "json_2019");
		define("usuario", "root");
		define("password", "");
		$opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
		try{
			$conexao = new PDO("mysql:host=" . servidor . "; dbname=" . nome_bd, usuario, password, $opcoes);
			return $conexao;
		} catch (Exception $e) {
			die("Erro de conexão: " . $e->getMessage());
		}
	}
}

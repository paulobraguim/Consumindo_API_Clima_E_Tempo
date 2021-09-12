<?php

//Autoload das classes
require __DIR__ . "/vendor/autoload.php";

//Dependências
use App\WebService\Api;

//Instância da Classe
$api = new Api("5c113205eab4b011183a1695e7893864");

$cidade = "Sales";
$uf = "SP";

$dados = $api->consultarClima($cidade, $uf);

echo "Cidade: $cidade/$uf<br/>";

echo "Temperatura: " . $dados['main']['temp'];
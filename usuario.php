<?php

$nome = "Géssica Grolli";
$email = "GéssiCA@alura.com.br";
$senha = 'São';

echo $senha[0] . PHP_EOL;
echo strlen($senha) . PHP_EOL;
echo mb_strlen($senha) . PHP_EOL;

$posicaoDoArroba = strpos($email, "@");

$usuario = substr($email, 0, $posicaoDoArroba);

echo strtoupper($usuario) . PHP_EOL;
echo strtolower($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(" ", $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

$csv = 'Lucas,24,lucas@motta.com.br';
var_dump(explode(",", $csv));

echo trim($email) . PHP_EOL;

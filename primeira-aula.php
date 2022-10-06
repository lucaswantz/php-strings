<?php

$nome = "Lucas Wantz da Motta";

$ehDaMinhaFamilia = str_contains($nome, "Motta");

if ($ehDaMinhaFamilia) {
	echo "$nome é da minha família" . PHP_EOL;
} else {
	echo "$nome não é da minha família" . PHP_EOL;
}

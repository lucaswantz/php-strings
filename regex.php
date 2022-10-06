<?php

$telefones = ["(54) 99111 - 1111", "(54) 99122 - 2222", "(54) 9133 - 3333"];

foreach($telefones as $telefone) {
	$regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';

	$telefoneValido = preg_match(
		$regex,
		$telefone,
		$verificacoes
	);

	// var_dump($verificacoes);

	if ($telefoneValido) {
		echo "Telefone válido: $telefone" . PHP_EOL;
	} else {
		echo "Telefone inválido: $telefone" . PHP_EOL;
	}

	echo preg_replace(
		$regex,
		'(XX) \2',
		$telefone
	) . PHP_EOL;
}

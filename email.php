<?php

function geraEmail(): void {
	$conteudoEmail = <<<END
	Olá, Fulano(a)!

	Estamos entrando em contato para
	{motivo do contato}

	{assinatura}
	END;

	echo $conteudoEmail;
}

geraEmail();


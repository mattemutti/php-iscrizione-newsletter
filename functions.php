<?php


/**
 * Funzione che controlla la sintassi della mail inserita dall'utente
 * 
 */
function checkEmail($email)
{
	if (str_contains($email, '@') && str_contains($email, '.')) {
		return [
			'status' => 'alert-success text-success',
			'text' => 'Ti sei sicritto',
		];
	} else {
		return [
			'status' => 'alert-danger text-danger',
			'text' => 'Email errata',
		];
	}
}
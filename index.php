<?php

// stampo in pagina l'array della mail letta dall'input tramite get dopo aver premito il bottone
var_dump($_GET);
// valore booleano se la mail è presente nell'array
var_dump(isset($_GET['email']));

// salvo la mail in una variabile
$email = $_GET['email'];


// condizione che controlla se la mail è presente
if (isset($_GET['email'])) {
	//se presente allora leggi la variabile
	var_dump($email);

	/*
			 //controllare se all'interno della mail abbiamo '@' e '.'
			 if (str_contains($email, '@') && str_contains($email, '.')) {
				 $message = 'ok';
			 } else {
				 $message = 'Fail';
			 }
			  */

	// invochiamo la funzione dentro alla variabile $message che faremo vedere il suo return in pagina html
	// e passiamo il valore della variabile $mail
	$message = checkEmail($email);

}
/**
 * Funzione che controlla la sintassi della mail inserita dall'utente
 * 
 */
function checkEmail($email)
{
	if (str_contains($email, '@') && str_contains($email, '.')) {
		return 'Ok, ti sei sicritto';
	} else {
		return 'Email non valida';
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Newsletter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


	<main>


		<section class="newsletter">
			<div class="container">
				<div class="row">
					<div class="col">
						<form action="" method="get">
							<div class="mb-3">
								<label for="" class="form-label"></label>
								<input type="text" class="form-control" name="email" id="email"
									aria-describedby="helpId" placeholder="" />
								<small id="emailHelper" class="form-text text-muted">Type your email adress</small>
							</div>
							<button type="submit">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</section>

		<!-- Se nella variabile $message è presente qualcosa stampiamo ilsuo contenuto-->
		<?php if (isset($message)): ?>
			<div class="container">
				<div class="row">
					<div class="col">
						<strong><?= $message ?></strong>
					</div>
				</div>
			</div>
		<?php endif; ?>





	</main>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
</body>

</html>
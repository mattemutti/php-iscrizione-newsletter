<?php

// salvo la mail in una variabile
$email = $_GET['email'];

// richiamo il file dove troviamo le funzioni
include __DIR__ . '/functions.php';

// condizione che controlla se la mail è presente
if (isset($_GET['email'])) {
	//se presente allora leggi la variabile
// var_dump($email);

	// invochiamo la funzione dentro alla variabile $message e faremo vedere il suo return in pagina html
// e passiamo il valore della variabile $mail
	$message = checkEmail($email);

	session_start();

	//var_dump($_SESSION);
	$_SESSION['message'] = $message;


	//header('Location: /index.php');

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Result</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-body-secondary">

	<div class="mb-5">

	</div>
	<!-- Se nella variabile $message è presente qualcosa stampiamo ilsuo contenuto-->
	<?php if (isset($message)): ?>
		<div class="container">
			<div class="row justify-content-center align-content-center text-center">
				<div class="col-6 ">
					<div class="alert <?= $message['status'] ?>" role="alert">
						<strong><?= $message['text'] ?></strong>
					</div>
					<a href="http://localhost:8888/php/Esercizi/php-iscrizione-newsletter/">
						<button type="button" class="btn btn-dark">Back</button>
					</a>
				</div>
			</div>
		<?php endif; ?>




		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
			crossorigin="anonymous"></script>
</body>

</html>
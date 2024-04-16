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

<body class="bg-body-secondary">

	<header class=" bg-dark mb-5">
		<div class="container">
			<nav class="navbar navbar-expand-lg bg-dark text-white">
				<div class="container-fluid text-white">
					<a class="navbar-brand text-white" href="/php/Esercizi/php-iscrizione-newsletter">Logo</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav text-white me-auto mb-2 mb-lg-0 ">
							<li class="nav-item">
								<a class="nav-link active text-white" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white" href="#">Link</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled text-white" aria-disabled="true">Disabled</a>
							</li>
						</ul>
						<form class="d-flex" role="search">
							<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-light" type="submit">Search</button>
						</form>
					</div>
				</div>
			</nav>
		</div>
	</header>



	<main class="">

		<section class="newsletter">
			<div class="container">
				<div class="row justify-content-center align-content-center text-center">
					<div class="col-4">
						<form action="" method="get">
							<div class="mb-3">
								<label for="" class="form-label text-dark">Newsletter</label>
								<input type="text" class="form-control bg-dark text-white" name="email" id="email"
									aria-describedby="helpId" placeholder="" />
								<small id="emailHelper" class="form-text text-muted">Type your email adress</small>
							</div>
							<button type="submit" class="btn btn-dark">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</section>

		<!-- Se nella variabile $message è presente qualcosa stampiamo ilsuo contenuto-->
		<?php if (isset($message)): ?>
			<div class="container">
				<div class="row justify-content-center align-content-center text-center">
					<div class="col-6 ">
						<div class="alert <?= $message['status'] ?>" role="alert">
							<strong><?= $message['text'] ?></strong>
						</div>
					</div>
				</div>
			<?php endif; ?>

	</main>

	<footer>

	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
</body>

</html>
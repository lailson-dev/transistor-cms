<?php
	require_once 'app/admin/connection/Crud.php';

	$crud  		= new Crud;
	$games 		= $crud->read('games', 1);
	$spotlight 	= $crud->read('spotlight_game', 0, 1);
	$contact 	= $crud->read('form_contact', 0, 1);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<title>Transistor - Red The Singer - Lailson Conceição</title>

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="app/admin/pages/custom.style.php">
</head>
<body>

	<header class="header__page container-fluid">
		<div class="header__page-logo d-flex justify-content-center align-items-center">
			<img src="assets/images/Imagem-3.png" alt="Transistor logo">
			<a href="#" class="text-uppercase text-white font-weight-bold">Supergiantgames</a>
		</div>		
	</header>

	<main class="main__page container-fluid p-0 m-0">
		<!-- MAIN PAGE -->
		<section class="main__page-container">
			<div class="page__container-card">
				<div class="container__card-title">
					<h6 class="text-uppercase text-white font-weight-bold"><?= $spotlight->game_title; ?></h6>
				</div>
				<div class="container__card-image">
					<img src="assets/images/<?= $spotlight->game_image; ?>" alt="<?= $spotlight->game_title; ?>">
				</div>
				<div class="container__card-description">
					<p class="lead text-white text-center">"<?= $spotlight->game_description; ?>"</p>
				</div>
			</div>
		</section>

		<!-- CARDS HEROS -->
		<section class="main__page-heros container-fluid">
			<div class="page__heros-container row mt-5">
				<?php foreach ($games as $game): ?>
				<div class="container__cards-card">
					<div class="cards__card-top">
						<img src="assets/images/<?= $game->game_image; ?>">
					</div>
					<div class="cards__card-bottom">
						<p><?= $game->game_description; ?></p>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</section>

		<section class="footer__page container-fluid">
			<div class="footer__page-formulario container d-flex flex-column justify-content-center align-items-center">
				<div class="row">
					<div class="d-flex flex-column justify-content-center align-items-center">
						<h3 class="text-uppercase font-weight-bold"><?= $contact->form_title; ?></h3>
						<p class="lead"><?= $contact->form_description; ?></p>
					</div>
				</div>
				<form action="app/admin/connection/config/contact.php" class="row col-md-8" method="POST">
					<div class="form-group col-md-6">
						<input type="text" class="form-control" name="input-name" placeholder="Nome">
					</div>

					<div class="form-group col-md-6">
						<input type="email" class="form-control" name="input-email" placeholder="Email">
					</div>

					<div class="form-group col-md-12">
						<textarea name="input-message" rows="10" style="resize: none" class="form-control" placeholder="Mensagem"></textarea>
					</div>

					<div class="form-group col-md-12">
						<button class="text-uppercase btn btn-send" type="submit">Enviar</button>
					</div>
				</form>
			</div>
		</section>

		<footer class="footer__page-line">
			<a href="#"><</a>
		</footer>
	</main>
	
</body>
</html>
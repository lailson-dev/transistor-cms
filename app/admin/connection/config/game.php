<?php

if(isset($_POST)) {	
	$photoGame		 = $_FILES['input-image-game'];
	$description	 = filter_input(INPUT_POST, 'input-description-game', FILTER_SANITIZE_SPECIAL_CHARS);

	if(!$photoGame || !$description)
		header('Location: ../../games.php');

	$photoGameExtension 	= pathinfo($_FILES['input-image-game']['name'], PATHINFO_EXTENSION);

	require_once '../helpers/functions.php';

	$folder   			= "../../../../assets/images/";
	$tempGame 			= $photoGame['tmp_name'];

	if(move_uploaded_file($tempGame, $folder.$photoGame['name'])) {
		require_once '../Crud.php';


		$create = new Crud;
		$create->setImageGame($photoGame['name']);
		$create->setDescription($description);

		if(!$create->insertGame())
			header('Location: ../../games.php?false');

		header('Location: ../../games.php?true');
	}
}



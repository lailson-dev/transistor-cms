<?php

if(isset($_POST)) {
	$title 			 = filter_input(INPUT_POST, 'input-name-game', FILTER_SANITIZE_SPECIAL_CHARS);
	$description	 = filter_input(INPUT_POST, 'input-description-game', FILTER_SANITIZE_SPECIAL_CHARS);
	$photoBackground = $_FILES['input-background-game'];
	$photoGame		 = $_FILES['input-image-game'];

	if(!$title || !$description || !$photoBackground || !$photoGame)
		header('Location: ../../spotlight.php');

	if($_FILES['input-background-game']['name'] != $_FILES['input-image-game']['name']) {
		$backgroundImageExtension 	= pathinfo($_FILES['input-background-game']['name'], PATHINFO_EXTENSION);
		$imageExtension 			= pathinfo($_FILES['input-image-game']['name'], PATHINFO_EXTENSION);
	}

	require_once '../helpers/functions.php';

	$folder   			= "../../../../assets/images/";
	$tempBackground 	= $photoBackground['tmp_name'];
	$tempGame 			= $photoGame['tmp_name'];
	$clearTitle 		= clearString($title);
	$newNameBackground	= "{$clearTitle}-background.{$backgroundImageExtension}";
	$newNameGame		= "{$clearTitle}-spotlight.{$imageExtension}";

	if(move_uploaded_file($tempBackground, $folder.$newNameBackground) && move_uploaded_file($tempGame, $folder.$newNameGame)) {
		require_once '../Crud.php';

		$create = new Crud;
		$create->setBackgroundImage($newNameBackground);
		$create->setImageGame($newNameGame);
		$create->setTitle($title);
		$create->setDescription($description);

		if(!$create->insertSpotlight())
			header('Location: ../../spotlight.php?false');

		header('Location: ../../spotlight.php?true');
	}
}



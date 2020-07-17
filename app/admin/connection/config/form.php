<?php

if(isset($_POST) && isset($_POST['form-send'])) {
	$title 			 = filter_input(INPUT_POST, 'input-title-form', FILTER_SANITIZE_SPECIAL_CHARS);
	$description	 = filter_input(INPUT_POST, 'input-description-form', FILTER_SANITIZE_SPECIAL_CHARS);
	$email 			 = filter_input(INPUT_POST, 'input-email-form', FILTER_SANITIZE_SPECIAL_CHARS);

	if(!$title || !$description || !$email)
		header('Location: ../../form.php');

	require_once '../Crud.php';

	$create = new Crud;
	$create->setTitle($title);
	$create->setDescription($description);
	$create->setEmailReceiver($email);

	if(!$create->insertContact())
		header('Location: ../../form.php?false');

	header('Location: ../../form.php?true');
}

$title 			 = filter_input(INPUT_POST, 'input-title-update', FILTER_SANITIZE_SPECIAL_CHARS);
$id 			 = filter_input(INPUT_POST, 'input-id-update', FILTER_SANITIZE_SPECIAL_CHARS);
$description	 = filter_input(INPUT_POST, 'input-description-update', FILTER_SANITIZE_SPECIAL_CHARS);
$email 			 = filter_input(INPUT_POST, 'input-email-update', FILTER_SANITIZE_SPECIAL_CHARS);

if(!$title || !$description || !$email)
	header('Location: ../../form.php');

require_once '../Crud.php';

$create = new Crud;
$create->setId($id);
$create->setTitle($title);
$create->setDescription($description);
$create->setEmailReceiver($email);

if(!$create->updateContact())
	header('Location: ../../form.php?false');

header('Location: ../../form.php?true');
<?php

if(isset($_POST)) {
	$name 		= filter_input(INPUT_POST, 'input-name', FILTER_SANITIZE_SPECIAL_CHARS);
	$email 		= filter_input(INPUT_POST, 'input-email', FILTER_SANITIZE_SPECIAL_CHARS);
	$message 	= filter_input(INPUT_POST, 'input-message', FILTER_SANITIZE_SPECIAL_CHARS);

	if(!$name || $email || $message)
		header('Location: ../../../../');

	require_once '../Crud.php';

	$crud = new Crud;
	$crud->setTitle($name);
	$crud->setEmailReceiver($email);
	$crud->setDescription($message);
	$crud->setStatus(0);

	if(!$crud->insertMessage())
		header('Location: ../../../../index.php?false');

	header('Location: ../../../../index.php?true');
}
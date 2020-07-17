<?php 

	include_once 'pages/header.php';
	session_start();

	$crud = new Crud;

	if(isset($_POST) && isset($_POST['input-delete-message'])) {
		$idMessage  			 = filter_input(INPUT_POST, 'input-delete-message', FILTER_SANITIZE_SPECIAL_CHARS);
		$message 				 = $crud->readOne('messages', 'id', '=', $idMessage);
		$_SESSION['idMessage'] 	 = $message->id;
		$_SESSION['messageEmail'] = $message->message_email;
	} else if(isset($_POST['input-unconfirm-delete']))
		header('Location: messages.php');
	else {
		$delete = new Crud;
		$delete->setId($_SESSION['idMessage']);

		if(!$delete->deleteMessage()) 
			header('Location: messages.php?false');

		header('Location: messages.php?true');
	}

 ?>

<h3>Você deseja deletar o email de <?= $_SESSION['messageEmail'];?>?</h3>
<form action="deleteMessage.php" class="form-inline" method="POST">
	<input class="btn btn-danger mr-2" type="submit" name="input-confirm-delete" value="Sim">
	<input class="btn btn-primary" type="submit" name="input-unconfirm-delete" value="Não">
</form>

<?php include_once 'pages/footer.php'; ?>
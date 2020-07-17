<?php 

	include_once 'pages/header.php';
	session_start();

	$crud = new Crud;

	if(isset($_POST) && isset($_POST['input-edit-message'])) {
		$idMessage  			  = filter_input(INPUT_POST, 'input-edit-message', FILTER_SANITIZE_SPECIAL_CHARS);
		$message 				  = $crud->readOne('messages', 'id', '=', $idMessage);
		$_SESSION['idMessage'] 	  = $message->id;
		$_SESSION['messageName']  = $message->message_name;
		$_SESSION['messageEmail'] = $message->message_email;
		$_SESSION['messageText'] = $message->message_text;
	}
 ?>

<div class="row d-flex flex-column">
	<h3><?= $_SESSION['messageName'] ?></h3>
	<p class="lead"><?= $_SESSION['messageText']; ?></p>
</div>

<h6 class="mt-5">Responder <?= $_SESSION['messageName'] ?> - <?= $_SESSION['messageEmail']; ?></h6>
<div class="row mb-5">
  <form class="col-md-6" method="POST" action="connection/config/mail.php" enctype="multipart/form-data" name="form-contact">
    <div class="form-group">
      <label for="input-reply">Mensagem de resposta</label>
      <textarea style="resize: none;" class="form-control" id="input-reply" name="input-reply" rows="3"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" name="form-send" value="Enviar">
  </form>            
</div>


 <?php include_once 'pages/footer.php'; ?>
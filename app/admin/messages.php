<?php
	include_once 'pages/header.php';

	$message 	= new Crud;
	$messages 	= $message->readMessage('messages');
 ?>
 <h2>Listagem das Mensagens</h2>
<div class="row">
	<div class="col-md-8">
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Nome</th>
		      <th>Email</th>
		      <th>Mensagem</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php foreach ($messages as $message): ?>
		    <tr>
		      <th><?= $message->id; ?></th>
		      <td><?= $message->message_name; ?></td>
		      <td><?= $message->message_email; ?></td>
		      <td colspan="2"><?= $message->message_text; ?></td>
		      <td>
		      	<form action="message.php" method="POST">
		      		<input type="hidden" name="input-edit-message" value="<?= $message->id; ?>"/>
		      		<button type="submit" class="btn btn-primary" title="Responder email"><span data-feather="message-circle"></span></button>
		      	</form>
		      </td>
		      <td>
		      	<form action="deleteMessage.php" method="POST">
		      		<input type="hidden" name="input-delete-message" value="<?= $message->id; ?>"/>
		      		<button type="submit" class="btn btn-danger" title="Apagar email"><span data-feather="trash-2"></span></button>
		      	</form>
		      </td>
		    </tr>
			<?php endforeach; ?>
		  </tbody>
		</table>
	</div>
</div>

<?php include_once 'pages/footer.php'; ?>
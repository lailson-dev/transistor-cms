<?php include_once 'pages/header.php'; ?>
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
		    <tr>
		      <th>1</th>
		      <td>Mark</td>
		      <td>Otto@gmail.com</td>
		      <td colspan="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, et, quae laudantium architecto fuga reiciendis dolor veniam omnis consequatur harum nesciunt sint quod placeat, quam animi officia rem maiores nemo.</td>
		      <td>
		      	<form action="#">
		      		<input type="hidden" value="1">
		      		<button type="submit" class="btn btn-primary"><span data-feather="edit"></span></button>
		      	</form>
		      </td>
		      <td>
		      	<form action="#">
		      		<input type="hidden" value="1">
		      		<button type="submit" class="btn btn-danger"><span data-feather="trash-2"></span></button>
		      	</form>
		      </td>
		    </tr>
		    <tr>
		      <th>2</th>
		      <td>Jacob</td>
		      <td>Thornton@gmail.com</td>
		      <td colspan="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, et, quae laudantium architecto fuga reiciendis dolor veniam omnis consequatur harum nesciunt sint quod placeat, quam animi officia rem maiores nemo.</td>
		      <td>
		      	<form action="#">
		      		<input type="hidden" value="1">
		      		<button type="submit" class="btn btn-primary"><span data-feather="edit"></span></button>
		      	</form>
		      </td>
		      <td>
		      	<form action="#">
		      		<input type="hidden" value="1">
		      		<button type="submit" class="btn btn-danger"><span data-feather="trash-2"></span></button>
		      	</form>
		      </td>
		    </tr>
		    <tr>
		      <th>3</th>
		      <td>Larry</td>
		      <td>the Bird@gmail.com</td>
		      <td colspan="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, et, quae laudantium architecto fuga reiciendis dolor veniam omnis consequatur harum nesciunt sint quod placeat, quam animi officia rem maiores nemo.</td>
		      <td>
		      	<form action="deleteMessage.php">
		      		<input type="hidden" name="input-edit-message" value="1">
		      		<button type="submit" class="btn btn-primary"><span data-feather="edit"></span></button>
		      	</form>
		      </td>
		      <td>
		      	<form action="deleteMessage.php">
		      		<input type="hidden" name="input-delete-message" value="1">
		      		<button type="submit" class="btn btn-danger"><span data-feather="trash-2"></span></button>
		      	</form>
		      </td>
		    </tr>
		  </tbody>
		</table>
	</div>
</div>

<?php include_once 'pages/footer.php'; ?>
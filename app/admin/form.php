<?php include_once 'pages/header.php'; ?>
<h2 class="mt-5">Configurar o Formulário de Contato</h2>
<div class="row mb-5">
  <form class="col-md-6" method="POST" enctype="multipart/form-data" name="form-contact">
    <div class="form-group">
      <label for="input-title-form">Título do Formulário</label>
      <input type="text" class="form-control" id="input-title-form" name="input-title-form">
    </div>
    <div class="form-group">
      <label for="input-description-form">Descrição</label>
      <input type="text" class="form-control" id="input-description-form" name="input-description-form">
    </div>
    <div class="form-group">
      <label for="input-email-form">Email que receberá os contatos</label>
      <input type="email" class="form-control" id="input-email-form" name="input-email-form">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>            
</div>
<?php include_once 'pages/footer.php'; ?>
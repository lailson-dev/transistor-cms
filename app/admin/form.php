<?php
  include_once 'pages/header.php';
  include_once 'connection/Crud.php';

  $crud = new Crud;
  $result = $crud->read('form_contact');
?>

<h2 class="mt-5">Cadastrar dados do formulário</h2>
<div class="row mb-5">
  <form class="col-md-6" method="POST" action="connection/config/form.php" enctype="multipart/form-data" name="form-contact">
    <div class="form-group">
      <label for="input-title-form">Título do Formulário</label>
      <input type="text" class="form-control" id="input-title-form" name="input-title-form">
    </div>
    <div class="form-group">
      <label for="input-description-form">Descrição</label>
      <textarea style="resize: none;" class="form-control" id="input-description-form" name="input-description-form" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="input-email-form">Email que receberá os contatos</label>
      <input type="email" class="form-control" id="input-email-form" name="input-email-form">
    </div>
    <input type="submit" class="btn btn-primary" name="form-send" value="Cadastrar">
  </form>            
</div>

<h2 class="mt-5">Formulário para edição de conteúdo</h2>
<div class="row mb-5">
  <form class="col-md-6" method="POST" action="connection/config/form.php" enctype="multipart/form-data" name="form-contact-update">
    <input type="hidden" name="input-id-update" value="<?= $result->id; ?>">
    <div class="form-group">
      <label for="input-title-form">Título do Formulário</label>
      <input type="text" class="form-control" id="input-title-form" name="input-title-update" value="<?= $result->form_title; ?>">
    </div>
    <div class="form-group">
      <label for="input-description-form">Descrição</label>
      <textarea style="resize: none;" class="form-control" id="input-description-form" name="input-description-update" rows="3"><?= $result->form_description; ?></textarea>
    </div>
    <div class="form-group">
      <label for="input-email-form">Email que receberá os contatos</label>
      <input type="email" class="form-control" id="input-email-form" name="input-email-update" value="<?= $result->form_email_receiver; ?>">
    </div>
    <input type="submit" class="btn btn-primary" name="form-update" value="Salvar">
  </form>            
</div>
<?php include_once 'pages/footer.php'; ?>
<?php include_once 'pages/header.php'; ?>
<h2>Cadastrar Game em Destaque</h2>
<div class="row mb-5">
  <form class="col-md-6" method="POST" action="connection/config/spotlight.php" enctype="multipart/form-data" name="form-spotlight-game">
    <div class="form-group">
      <label>Imagem de fundo</label>
      <input type="file" class="form-control-file" name="input-background-game">
    </div>
    <div class="form-group">
      <label for="input-name-game">Título do Jogo</label>
      <input type="text" class="form-control" id="input-name-game" name="input-name-game">
    </div>
    <div class="form-group">
      <label for="input-description-game">Descrição curta do Jogo</label>
      <textarea style="resize: none;" class="form-control" id="input-description-game" name="input-description-game" rows="3" placeholder="Não digite entre aspas, no front-end já está estilizado assim."></textarea>
    </div>
    <div class="form-group">
      <label>Imagem do jogo</label>
      <input type="file" class="form-control-file" name="input-image-game">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>            
</div>
<?php include_once 'pages/footer.php'; ?>
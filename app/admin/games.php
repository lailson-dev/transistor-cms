<?php include_once 'pages/header.php'; ?>
<h2 class="mt-5">Cadastrar Jogos</h2>
<div class="row">
  <form class="col-md-6" method="POST" action="connection/config/game.php" enctype="multipart/form-data" name="form-games">              
    <div class="form-group">
      <label>Imagem do jogo</label>
      <input type="file" name="input-image-game" class="form-control-file">
    </div>
    <div class="form-group">
      <label for="input-description-game">Descrição curta do Jogo</label>
      <textarea style="resize: none;" class="form-control" id="input-description-game" name="input-description-game" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>            
</div>
<?php include_once 'pages/footer.php'; ?>
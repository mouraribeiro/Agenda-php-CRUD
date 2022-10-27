<?php 

include_once("templates/header.php");


?>
<div class="container">
  <?php include_once("templates/backbtn.html"); ?>
  <h1 id="main-title">Criar contato</h1>
  <form class="create-form" action="<?php $BASE_URL ?>config/process.php" method="post">
    <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
        <label for="phone">Telefone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
        <label for="observations">Observações</label>
        <textarea type="text" class="form-control" name="observations" id="observations"  rows="3" placeholder="Digite aqui suas observações"></textarea>

      </div>
      <br>
      <button type="submit" class="btn btn-primary">Cadastrar</button>

  </form>
</div> 
  
  
<?php 
include_once("templates/footer.php");


?>
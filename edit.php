<?php 

include_once("templates/header.php");


?>
<div class="container">
  <?php include_once("templates/backbtn.html"); ?>
  <h1 id="main-title">Editar contato</h1>
  <form class="create-form" action="<?php $BASE_URL ?>config/process.php" method="post">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" value="<?php $contact['id']?>">
      <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="<?= $contact['nome']?>"required>
        <label for="phone">Telefone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" value="<?= $contact['phone']?>"required>
        <label for="observations">Observações</label>
        <textarea type="text" class="form-control" name="observations" id="observations"  rows="3" placeholder="Digite aqui suas observações"><?= $contact['observations']?></textarea>

      </div>
      <br>
      <button type="submit" class="btn btn-primary">Atualizar</button>

  </form>
</div> 
  
  
<?php 
include_once("templates/footer.php");


?>
<?php 

include_once("templates/header.php");
include_once("config/process.php");


?>
 <div class="container">
  <?php if(isset($printMsg)&& $printMsg != ""): ?>
    <p id="msg"><?php $printMsg ?></p>
    <?php endif; ?>
    <h1 id="main-title">Minha agenda</h1>
    <?php if(count($contacts)> 0): ?>
      <table class="table" id="contacts-table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($contacts as $contact):?>
            <tr>
              <td scope="row" class="col-id"><?= $contact['id']?></td>
              <td scope="row"><?= $contact['nome']?></td>
              <td scope="row"><?= $contact['phone']?></td>
              <td class="actions">
              <a href="<?php $BASE_URL?>show.php?id=<?= $contact['id'] ?>"><i class="fas fa-eye check-icon"></i></a>
                <a href="<?php $BASE_URL?>edit.php?id=<?= $contact['id'] ?>"><i class="fas fa-edit edit-icon"></i></a>
                <form class="delete-form" action="<?php $BASE_URL?>/config/process.php" method="post">
                <input type="hidden" name="type" value="delete">
                <input type="hidden" name="type" id="<?= $contact['id'] ?>">
                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                </form>
              </td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    <?php else: ?>
      <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?php $BASE_URL ?>create.php">Clique aqui para adicionar</a>.</p>
    <?php endif;?>
 </div>
  
  
<?php 
include_once("templates/footer.php");

<?php
include_once("templates/header.php");
?>

<div class="container">
   <?php include_once("templates/backbtn.php"); ?>

   <h1 id="main-title">Editar Contato</h1>
   <form id="create-form" action="<?php echo $BASE_URL ?>/config/process.php" method="POST">

      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">

      <div class="form-group">
         <label for="name">Nome do contato</label>
         <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome" value="<?php echo $contact['name']; ?>" required>
      </div>
      <div class="form-group">
         <label for="phone">Telefone do contato:</label>
         <input type="text" name="phone" id="phone" class="form-control" placeholder="Digite o telefone" value="<?php echo $contact['phone']; ?>" required>
      </div>
      <div class="form-group">
         <label for="observations">Observações:</label>
         <textarea type="observations" name="observations" id="phone" class="form-control" placeholder="Insira as observações" rows="3"><?php echo $contact['observations']; ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Atualizar</button>
   </form>
</div>

<?php
include_once("templates/footer.php");
?>
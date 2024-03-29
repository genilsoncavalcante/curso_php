<?php
   require_once("templates/header.php");

   // Verifica se o usuário está autenticado
   require_once("models/User.php");
   require_once("dao/UserDAO.php");

   $user = new User();
   $userDao = new UserDAO($conn, $BASE_URL);

   $userData = $userDao->verifyToken(true);

?>
<div id="main-container" class="container-fluid">
   <div class="offset-md-4 col-md-4 new-movie-container">
      <h1 class="page-title">Adicionar Filme</h1>
      <p class="page-description">Adicione seu crítica e compartilhe com o mundo!</p>
      <form action="<?php echo $BASE_URL; ?>/movie_process.php" id="add-movie-form" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="type" value="create">
         <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Digite o título do seu filme">
         </div>
         <div class="form-group">
            <label for="image">Imagem:</label>
            <input type="file" name="image" class="form-control-file" id="image">
         </div>
         <div class="form-group">
            <label for="length">Duração:</label>
            <input type="text" name="length" class="form-control" id="length" placeholder="Digite a duração do filme">
         </div>
         <div class="form-group">
            <label for="category">Categoria:</label>
            <select name="category" id="category" class="form-control">
               <option value="">Selecione</option>
               <option value="Ação">Ação</option>
               <option value="Drama">Drama</option>
               <option value="Comédia">Comédia</option>
               <option value="Fantasia / FIcção">Fantasia / Ficção</option>
               <option value="Romance">Romance</option>
            </select>
            <div class="form-group">
               <label for="trailer">Trailer:</label>
               <input type="text" name="trailer" class="form-control" id="trailer" placeholder="Insira o link do trailer">
            </div>
            <div class="form-group">
               <label for="description">Descrição:</label>
               <textarea name="description" id="description" rows="5" class="form-control" placeholder="Descreva o filme..."></textarea>
            </div>
            <input type="submit" class="btn card-btn" value="Adicionar filme">
         </div>
      </form>
   </div>
</div>
<?php
require_once("templates/footer.php");
?>
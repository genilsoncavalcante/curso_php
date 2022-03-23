<?php

require_once("templates/header.php");
require_once("dao/UserDAO.php");
require_once("models/User.php");

$user = new User();
$userDao = new UserDao($conn, $BASE_URL);

$userData = $userDao->verifyToken(true);

$fullName = $user->getFullName($userData);

if ($userData->image == "") {
   $userData->image = "user.png";
}

?>
<div id="main-container" class="container-fluid">
   <div class="col-md-12">
      <form action="<?php echo $BASE_URL; ?>/user_process.php" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="type" value="update">
         <div class="row">
            <div class="col-md-4">
               <h1><?php echo $fullName; ?></h1>
               <p class="page-description">Altere seus dados no formulário abaixo:</p>
               <div class="form-group">
                  <label for="name">Nome:</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Digite o seu nome" value="<?php echo $userData->name; ?>">
               </div>
               <div class="form-group">
                  <label for="lastname">Sobrenome:</label>
                  <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Digite o seu sobrenome" value="<?php echo $userData->lastname; ?>">
               </div>
               <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="text" readonly name="email" id="email" class="form-control disabled" value="<?php echo $userData->email; ?>"> <!-- (readonly) - usuário não pode editar -->
               </div>
               <input type="submit" value="Alterar" class="btn form-btn">
            </div>
            <div class="col-md-4">
               <div id="profile-image-container" style="background-image: url('<?php echo $BASE_URL; ?>/img/users/<?php echo $userData->image; ?>')"></div>
               <div class="form-group">
                  <label for="image">Foto:</label>
                  <input type="file" name="image" class="form-control-file">
               </div>
               <div class="form-group">
                  <label for="bio">Sobre você:</label>
                  <textarea name="bio" id="bio" class="form-control" rows="5" placeholder="Conte quem você é, o que faz e onde trabalha..."><?php echo $userData->bio; ?></textarea>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<?php
require_once("templates/footer.php");
?>
<?php
include_once("config/url.php");
include_once("config/process.php");

//limpa a mensagem
if (!isset($_session['msg'])) {
   $printMsg = $_SESSION['msg'];
   $_SESSION['msg'] = '';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Agenda de Contatos</title>
   <!-- BOOTSTRAP -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- FONT AWESOME -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- CSS -->
   <link rel="stylesheet" href="<?php echo $BASE_URL ?>/css/styles.css">

   <!-- REMOVENDO ICONE DE PESQUISA EM PÁGINA SEM CONTATO -->
   <style>
      <?php if (count($contacts) == 0) : ?>
         #search {
            display: none;
         }
      <?php endif; ?>
   </style>
</head>

<body>
   <header>
      <nav>
         <a href="<?php echo $BASE_URL ?>/index.php">
            <img src="<?php echo $BASE_URL ?>/img/logo.svg" alt="Agenda" id="logo">
         </a>

         <div class="navigation">
            <a href="<?php echo $BASE_URL ?>/index.php" id="home-link">Agenda</a>
            <a href="<?php echo $BASE_URL ?>/create.php">Adicionar Contato</a>
         </div>

         <!-- CAMPO DO USUÁRIO - LOGIN -->

      </nav>
   </header>
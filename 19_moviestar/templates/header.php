<?php

   require_once("globals.php");
   require_once("db.php");
   require_once("models/Message.php");

   $message = new Message($BASE_URL);

   $flassMessage = $message->getMessage();

   if(!empty($flassMessage["msg"])) {
      // Limpar a mensagem
      $message->clearMessage();
   }

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MovieStar</title>
   <link rel="short icon" href="<?php echo $BASE_URL ?>/img/moviestar.ico">
   <!-- CSS -->
   <link rel="stylesheet" href="<?php echo $BASE_URL ?>/css/styles.css">
   <!-- BOOTSTRAP -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css" integrity="sha512-drnvWxqfgcU6sLzAJttJv7LKdjWn0nxWCSbEAtxJ/YYaZMyoNLovG7lPqZRdhgL1gAUfa+V7tbin8y+2llC1cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- FONT AWESOME -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   <header>
      <nav id="main-navbar" class="navbar navbar-expand-lg">
         <a href="<?php echo $BASE_URL ?>" class="navbar-brand">
            <img src="<?php echo $BASE_URL ?>/img/logo.svg" alt="MovieStar" id="logo">
            <span id="moviestar-title">MovieStar</span>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
         </button>
         <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
            <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="Search">
            <button type="submit" class="btn my-2 my-sm-0">
               <i class="fas fa-search"></i>
            </button>
         </form>
         <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a href="<?php echo $BASE_URL ?>/auth.php" class="nav-link">Entrar / Cadastrar</a>
               </li>
            </ul>
         </div>
      </nav>
   </header>
   <?php if (!empty($flassMessage["msg"])) : ?>
      <div class="msg-container">
         <p class="msg <?php echo $flassMessage["type"] ?>"><?php echo $flassMessage["msg"] ?></p>
      </div>
   <?php endif; ?>
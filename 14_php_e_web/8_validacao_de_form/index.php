<?php

   $validacoes = [];

   if(count($_POST) > 0) {

      if($_POST['nome'] === "") {
         $validacoes[] = "Por favor, digite o seu nome";
      }

      if($_POST['email'] === "") {
         $validacoes[] = "Por favor, digite o seu email";
      }

      if($_POST['senha'] === "") {
         $validacoes[] = "Por favor, digite o seu senha";
      }

      if($_POST['senha'] != $_POST['confirmar_senha']) {
         $validacoes[] = "As senhas devem ser iguais";
      }

   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

   <?php if(count($validacoes)): ?>

      <ul>
         <?php foreach($validacoes as $validacao): ?>
            <li><?php echo $validacao ?></li>
         <?php endforeach; ?>
      </ul>

   <?php endif; ?>

   <form action="index.php" method="POST">
      <div>
         Nome: <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
      </div>
      <div>
         Email: <input type="email" name="email" id="email" placeholder="Digite seu email">
      </div>
      <div>
         Senha: <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
      </div>
      <div>
         Confirmar Senha: <input type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Confirme sua senha">
      </div>
      <div>
         <input type="submit" value="Enviar">
      </div>
   </form>
</body>
</html>
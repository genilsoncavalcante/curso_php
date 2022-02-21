<?php

   if(isset($_COOKIE['nome'])) {
      $nome = $_COOKIE['nome'];
   }

   print_r($_COOKIE);

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
   <h1>Página</h1>

   <?php if($nome != ""): ?><!--O cookie é armazenado no browser e pode ser acesso entre as páginas do seu projeto-->
      <p>Seja bem vindo <?php echo $nome ?></p>
   <?php endif; ?>
</body>
</html>
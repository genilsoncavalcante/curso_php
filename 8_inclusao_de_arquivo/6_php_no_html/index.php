<?php

   include_once "backend.php";

?>

<h1>Seja bem vindo <?php echo $nome; ?></h1>
<p>Confira os nosso produtos:</p>
<ul>
   <?php foreach($produtos as $produto): ?><!--Abrindo a estrutura do foreach com uma sintaxe específica para o html-->

      <li><?php echo $produto ?></li>

   <?php endforeach; ?><!--fechando a tag do foreach com o endforeach-->
</ul>
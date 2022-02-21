<?php

   //Com o método GET, podemos pegar informações do servidor, e com o método POST, podemos enviar informações para o servidor.
   //Geralmente o GET é usado para buscas de pesquisas e o POST é usado para cadastro de usuários.

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
   <form action="processamento.php" method="GET">
      <div>
         <input type="text" name="nome" id="nome" placeholder="Preencha seu nome">
      </div>
      <div>
         <input type="number" name="idade" id="idade" placeholder="Preencha sua idade">
      </div>

      <div>
         <input type="submit" value="Enviar">
      </div>
   </form>
</body>
</html>
<?php

   $usuario = [
      'nome' => 'Genilson',
      'idade' => 20,
      'profissao' => 'Programador'
   ];

   if ($usuario) {
      $nome = $usuario['nome'];
      $idade = $usuario['idade'];
      $profissao = $usuario['profissao'];
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
   <form action="">
      <div>
         <input type="text" name="nome" id="nome" placeholder="Preencha o seu nome" value="<?php echo $nome; ?>">
      </div>
      <div>
         <input type="text" name="idade" id="idade" placeholder="Preencha o sua idade" value="<?php echo $idade; ?>">
      </div>
      <div>
         <input type="text" name="profissao" id="profissao" placeholder="Preencha sua profissao" value="<?php echo $profissao; ?>">
      </div>
      <div>
         <input type="submit" value="Enviar">
      </div>
   </form>
</body>
</html>
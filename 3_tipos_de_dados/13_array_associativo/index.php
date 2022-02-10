<?php

   //Os valores são acessados pelas chaves
   $dadosUsuario = ['nome' => 'Genilson', 'idade' => 20, 'etnia' => 'parda'];

   print_r($dadosUsuario);
   echo "<br>";
   echo $dadosUsuario['nome'];
   echo "<br>";
   echo $dadosUsuario['idade'];
   echo "<br>";
   echo $dadosUsuario['etnia'];   
   echo "<br>";


   $dadosCarro = [
      'marca' => 'BMW',
      'rodas' => 4,
      'teto_solar' => true,
      'velocidade_max' => 300,
      'blindado' => false
   ];
   print_r($dadosCarro);
   echo "<br>";
   echo $dadosCarro['marca'];
   echo "<br>";
   echo $dadosCarro['rodas'];
   echo "<br>";
   echo $dadosCarro['teto_solar'];
   echo "<br>";
   echo $dadosCarro['velocidade_max'];
   echo "<br>";
   echo $dadosCarro['blindado'];

?>
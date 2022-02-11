<?php

   //OBS: O include e o require podem chamar o mesmo arquivo mais de uma vez em um código, porém, a diferença entre o include_once e o require_once é que estes impedem o carregamento de mais de uma vez de um mesmo arquivo.

   include_once "teste2.php";
   include_once "teste2.php";//Não é executado

   require_once "teste3.php";
   require_once "teste3.php";//Não é executado

?>

<p>Testando código!</p>

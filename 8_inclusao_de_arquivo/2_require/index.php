<p>Testando</p>

<?php

   //Com o require, bem que estamos obrigando a existência do arquivo, pois neste caso, envés de gerar (warnings) no caso do include, o require dá um erro fatal, cancelando a requisição e compromete todo o funcionamento do código posterior, pois o arquivo está incorreto ou não existe, e isso é normalmente usado para quando estamos necessitando de um arquivo que temos que tê-lo obrigatoriamente.
   require "teste.php";

?>
<!--
   Não necessariamente fazemos o include/require de arquivos para aproveitar o php deles, podemos normalmente aproveitar o HTML e assim evitar a repetição de códigos entre outros arquivos.
-->

<p>Arquivo do include</p>

<?php

   require "arquivos/funcao.php";

   echo $nome . "<br>";
   echo $idade . "<br>";
   echo $sexo . "<br>";

?>
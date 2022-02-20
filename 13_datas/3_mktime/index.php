<?php

   $dataNascimento = mktime(02, 12, 22, 12, 10, 2001);

   echo $dataNascimento . "<br>";

   $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);
   echo $dataNascimentoFormatada . "<br>";

?>
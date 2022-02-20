<?php

   $cincoDias = strtotime("5 days");
   echo $cincoDias . "<br>";

   $dataAtualMais5 = date('d/m/y', $cincoDias);
   echo $dataAtualMais5 . "<br>";

   $doisMeses = strtotime('2 months');

   $dataAtualMais2Meses = date('d/m/y', $doisMeses);
   echo $dataAtualMais2Meses . "<br>";

?>
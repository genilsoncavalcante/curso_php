<?php

   $dataA = new DateTime();
   $dataB = new DateTime();

   $dataC = new DateTime();

   $dataB->setDate(2025, 03, 12);

   if($dataB > $dataA) {
      echo "A data B é maior que a data A <br>";
   } else {
      echo "A data A é maior que a data B <br>";
   }

   if($dataA == $dataC) {
      echo "A data A e C são iguais <br>";
   }

?>
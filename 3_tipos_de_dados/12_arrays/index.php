<?php
   $listaNumerica = [1,2,3,4,5];

   //OBS: o echo imprime strings e não arrays
   //echo $listaNumerica; //Dá um erro
   
   //Para imprimirmos arrays, devemos usar o:
   print_r($listaNumerica);

   echo "<br>";

   //Agora quando estamos nos referindo ao conteúdo dentro do array, podemos usar o echo:
   echo $listaNumerica[0];
?>
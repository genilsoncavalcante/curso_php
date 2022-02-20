<?php

   class Cachorro {
      function latir() {
         echo "auhauhauuuhh <br>";
      }
      function andar() {
         echo "cachorro andando <br>";
      }
   }

   $viraLata = new Cachorro;
   $viraLata->latir();
   $viraLata->andar();

?>
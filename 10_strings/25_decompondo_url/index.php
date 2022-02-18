<?php

   $url = "https://www.google.com";

   $arrayUrl = parse_url($url);

   print_r($arrayUrl);
   echo "<br>";

   echo $arrayUrl["host"];
   echo "<br>";
   echo "<br>";
   echo "<br>";

   $url2 = "https://www.google.com/?busca=php";

   $arrayUrl2 = parse_url($url2);

   print_r($arrayUrl2);
   echo "<br>";
   echo "<br>";
   echo "<br>";

   $url3 = "https://www.google.com/usuarios/genilson?id=12&nome=Genilson";

   $arrayUrl3 = parse_url($url3);

   print_r($arrayUrl3);
   echo "<br>";

?>
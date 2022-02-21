<?php

   print_r($_SERVER);
   
   echo "<br>";
   echo "<br>";
   echo "<br>";

   echo $_SERVER['MYSQL_HOME'];

   echo "<br>";
   echo "<br>";
   echo "<br>";

   if ($_SERVER['SERVER_NAME'] == 'localhost') {
      
      echo "Está acessando o localhost <br>";

   }

?>
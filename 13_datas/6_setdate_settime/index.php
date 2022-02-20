<?php

   $data = new DateTime();

   print_r($data);
   echo "<br>";

   //Definindo data:
   $data->setDate(1999, 12, 01);//ano, mês e dia

   print_r($data);
   echo "<br>";

   $data->setTime(14, 30, 30);//Hora, minuto e segundo

   print_r($data);
   echo "<br>";

   echo $data->format('d/m/Y') . "<br>";
?>
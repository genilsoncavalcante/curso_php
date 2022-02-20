<?php

   $data = new DateTime();

   echo $data->format('d/m/Y') . "<br>";

   echo $data->format('l . F . Y') . "<br>";

   $data->modify('+5 days') ;

   echo $data->format('d/m/Y') . "<br>";

   $data->modify('+15 years');
   
   echo $data->format('d/m/Y') . "<br>";

   $data->modify('-45 years');
   
   echo $data->format('d/m/Y') . "<br>";

?>
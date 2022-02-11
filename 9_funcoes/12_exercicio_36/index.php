<?php

//Arrays Globais:
$arrNumbers = [];
$arrFiltered = [];

//Definindo Array
function definirNumerosArray($inicio, $final) {

   global $arrNumbers;//utilizando o array global para escopo local.

   for ($i = $inicio; $i <= $final; $i++) { 
      array_push($arrNumbers, $i);
   }

   return $arrNumbers;

}



//Validando Array
function verificarNumeroNoArray($numeroInicial) {

   global $arrNumbers;

   foreach ($arrNumbers as $num) {
      if ($num === $numeroInicial) {
         return true;
      } else {
         continue;
      }
   }

}

//Reduzindo Array
function reduzirArray($numeroInicial) {

   global $arrNumbers;
   global $arrFiltered;

   $validacao = verificarNumeroNoArray($numeroInicial);
   
   if ($validacao === true) {
      
      for ($i = $numeroInicial; $i < count($arrNumbers); $i++) { 
         array_push($arrFiltered, $arrNumbers[$i]);
      }

      return $arrFiltered;

   } else {
      return "Esse número não tem no array";
   }

}

$arrayDeUmADez = definirNumerosArray(1, 10);
$resultado = reduzirArray(3);
print_r($resultado);


?>
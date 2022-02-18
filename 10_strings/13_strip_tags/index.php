<?php

   $textoHtml = "<p>Testando parágrafo.</p><div>Dentro de uma div.</div><p>Testando em outro parágrafo.</p>";

   echo $textoHtml;

   $salvarTextoBanco = strip_tags($textoHtml);//remove toda a formatação html e deixa em texto puro, desconsiderando as tags HTML, é um função boa para levarmos os dados para o BD.

   echo $salvarTextoBanco;

?>
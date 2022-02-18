<?php

   $pessoas = [
      'Genilson' => 20,
      'Geovano' => 26,
      'Germano' => 16,
      'Vitória' => 15
   ];

?>

<table border="1">
   <tr>
      <th>Nome</th>
      <th>Idade</th>
   </tr>
   <?php foreach($pessoas as $nome => $idade): ?>
      <tr>
         <td><?php echo $nome; ?></td>
         <td><?php echo $idade; ?></td>
      </tr>
   <?php endforeach; ?>
</table>
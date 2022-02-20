<?php

   $arr = [
      'Geo' => 10,
      'Gen' => 60,
      'Ger' => 50,
      'Vit' => 30,
   ];

   arsort($arr);

?>

<ol>
   <?php foreach($arr as $jogador => $pontuacao): ?>
      <li><?php echo "$jogador => $pontuacao <br>"; ?></li>
   <?php endforeach; ?>
</ol>
<?php

include_once("db.php");
include_once("dao/CarDAO.php");

$carDao = new CarDAO($conn);

$cars = $carDao->findAll();

?>

<h1>Insira um carro:</h1>
<form action="process.php" method="POST">
   <div>
      <label for="brand">Marca do carro:</label>
      <input type="text" name="brand" id="brand" placeholder="Insira a marca">
   </div>

   <div>
      <label for="km">Kilometragem:</label>
      <input type="text" name="km" id="km" placeholder="Insira a kilometragem">
   </div>

   <div>
      <label for="color">Cor do carro:</label>
      <input type="text" name="color" id="color" placeholder="Insira a cor">
   </div>

   <input type="submit" value="Salvar">
</form>
<ul>
   <?php foreach($cars as $car): ?>
      <li><?php echo $car->getId() ?> - <?php echo $car->getBrand() ?> - <?php echo $car->getKm() ?> - <?php echo $car->getColor() ?></li>
   <?php endforeach; ?>
</ul>
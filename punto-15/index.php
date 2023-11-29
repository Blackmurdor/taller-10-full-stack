<?php
  include "./operationsUtils.php";
  $numberOne = 0;
  $numberTwo = 0;
  $option = "";

  $numberOne = getNumber();
  $numberTwo = getNumber();

  $option = showMenu();

  $result = operate($numberOne, $numberTwo, $option);

  echo "EL resultado de la operación es: " . $result;
  
?>

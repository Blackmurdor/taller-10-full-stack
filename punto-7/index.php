<?php
  $numberOne = 0;
  $numberTwo = 0;

  echo "Ingresa el primer número a operar: ";
  $numberOne = readline();

  echo "Ingresa el segundo número a operar: ";
  $numberTwo = readline();

  $selector = 0;
  echo "Selecciona con un número la operación que deseas realizar siendo: \n";
  echo "1 - Sumar \n";
  echo "2 - Restar \n";
  echo "3 - Multiplicar \n";
  echo "4 - Dividir \n";
  $selector = readline();

  switch ($selector) {
    case ($selector == 1):
      echo "La suma de " . $numberOne . " + " . $numberTwo . " = " . ($numberOne + $numberTwo);
    break;

    case ($selector == 2):
      echo "La resta de " . $numberOne . " - " . $numberTwo . " = " . ($numberOne - $numberTwo);
    break;

    case ($selector == 3):
      echo "La multiplicación de " . $numberOne . " x " . $numberTwo . " = " . ($numberOne * $numberTwo);
    break;

    case ($selector == 4):
      echo "La división de " . $numberOne . " ÷ " . $numberTwo . " = " . ($numberOne / $numberTwo);
    break;

    default: 
      echo "No has seleccionado una opción correcta :(";
  }

?>
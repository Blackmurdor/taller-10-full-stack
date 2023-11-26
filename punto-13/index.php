<?php
  $arrayNumber = array(1, 5, 4, 7, 8);
  $sum = 0;

    for ($i = 0; $i < 5; $i++) {
        echo "Escriba un número para sumar: ";
        $arrayNumber[] = readline();
    }

    foreach($arrayNumber as $num) {
        $sum += $num;        
    }
  echo "La suma de todos los números es: " . $sum;
?>
<?php
  $sum = 0;

    for ($num = 1; $num <= 100; $num+=2) {
        echo $num . "\n";
        $sum += $num;
    }

  echo "La suma de todos los números impares del 1 al 100 es: " . $sum;

?>
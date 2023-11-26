<?php
  $number = 0;

  echo "Digita el número a multiplicar: ";
  $number = readline();

    for ($i = 0; $i <= 30; $i++) {
        echo $number . " x " . $i . " = " . ($number * $i) . "\n";
    }
?>
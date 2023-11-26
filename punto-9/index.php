<?php
  $number = 0;
  $i = 0;

  echo "Digita el número al que deseas generar la tabla de multiplicar: ";
  $number = readline();

    while ($i <= 35) {
        echo $number . " X " . $i . " = " . ($number * $i) . "\n" ;
        $i++;
    }

?>
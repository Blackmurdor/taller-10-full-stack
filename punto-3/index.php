<?php
    $number1 = 0;
    $number2 = 0;

    echo "Ingresa el primer número a sumar: ";
    $number1 = readline();

    echo "Ingresa el segundo número a sumar: ";
    $number2 = readline();

    $result = $number1 + $number2;

    echo "La suma de " . $number1 . " + " . $number2 . " = " . $result;
?>
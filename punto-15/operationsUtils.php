<?php
  function getNumber() {
    echo "Digita un número para operar: ";
    return readline();
  }

  function showMenu() {
    echo "Selecciona la operacion que deseas realizar según: \n";
    echo " + --> Suma \n";
    echo " - --> Resta \n";
    echo " * --> Multiplicación \n";
    echo " / --> División \n";
    return  readline();// String
  }

  function operate($x, $y, $option){
    switch($option) {
      case "+":
        return add($x, $y);
      case "-":
        return sub($x, $y);
      case "*":
        return dot($x, $y);
      case "/":
        return split($x, $y);
      default:
        echo "Opción no valida";
        return 0;
    }
  }

  function add($x, $y){
    return $x + $y;
  }

  function sub($x, $y){
    return $x - $y;
  }

  function dot($x, $y){
    return $x * $y;
  }

  function split($x, $y){
    return $x / $y;
  }

?>
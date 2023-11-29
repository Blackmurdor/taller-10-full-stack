<?php
  // 1. Funcion para poder obtener un número 
  function getNumber() {
    echo "Digita un número para operar: ";
    return readline();
  }

  // 2. Función para mostar menu y retornar respuesta 
  function showMenu() {
    echo "Selecciona la operacion que deseas realizar según: \n";
    echo " + --> Suma \n";
    echo " - --> Resta \n";
    echo " * --> Multiplicación \n";
    echo " / --> División \n";
    return  readline();// String
  }

  // 3. funcion que realice la operacion correcta
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

  // 4. funciones por cada operación
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
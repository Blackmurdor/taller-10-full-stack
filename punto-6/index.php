<?php
  $nameUser = "";
  $ageUser = 0;

  echo "Hola, porfavor digita tu nombre: ";
  $nameUser = readline();

  echo "Digita tu edad: ";
  $ageUser = readline();

  if ($ageUser >= 20) {
    echo $nameUser . ", eres mayor de edad.";
  }

  else {
    echo $nameUser . ", no eres mayor de edad";
  }
?>

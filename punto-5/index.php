<?php
  const TICKET_PRICE = 25000;
  $typeMembership = "";
  $numberPersons = 0;

  echo "Digita tu tipo de afiliación: ";
  $typeMembership = readline();

  echo "Digita el número de personas a ingresar: ";
  $numberPersons = readline();

  if (strtoupper($typeMembership) == "A" || strtoupper($typeMembership) == "B") {
    echo "El valor total de las entradas es: $" . ($numberPersons * (TICKET_PRICE * 0.7));
  }

  else {
    echo "El valor total de las entradas es: $" . ($numberPersons * TICKET_PRICE);
  }
?>
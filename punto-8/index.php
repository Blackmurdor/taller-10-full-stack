<?php
  Const TICKET_PRICE = 26000;
  $numberUsers = 0;
  $membershipType = "";

  echo "Hola, por favor digita tu tipo de afiliación: ";
  $membershipType = strtoupper (readline());

  echo "Digita el número de personas a ingresar: ";
  $numberUsers = readline();

  $totalPrice = TICKET_PRICE * $numberUsers;

    switch ($membershipType) {
        case "A":
            $totalPrice = ($totalPrice * 0.7);
        break;

        case "B":
            $totalPrice = ($totalPrice * 0.75);
        break;

        case "C":
            $totalPrice = ($totalPrice * 0.9);
        break;

        case "D":
            $totalPrice = ($totalPrice * 0.95);
        break;

        default: 
            echo "No cuentas con descuento, el valor a pagar es $" . $totalPrice . "\n";
    }

  echo "El total a pagar es $" . $totalPrice
?>
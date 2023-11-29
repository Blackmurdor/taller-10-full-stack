<?php
  include "./passwordCheck.php";

  $user = "";
  $password = "";

  echo "Digita tu usuario a registar \n";
  $user = readline();

  echo "Digita tu contraseña a registar \n";
  $password = readline();

  if (hasSecurityLong($password)) {
        if (hasUpperLetter($password)) {
            if (hasNumber($password)) {
                echo " Felicitaciones su contraseña es segura \n";
            } else {
            echo "Su contraseña no contiene números \n";
            }
        } else {
        echo "Su contraseña no contiene letras mayúsculas \n";
        }
    } else {
        echo "Su contraseña no cumple con la longitud segura \n";
     }  
?>
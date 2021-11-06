Faça um algoritmo PHP que receba duas strings, e descubra se elas são iguais ou diferentes, imprimindo “IGUAL” ou “DIFERENTE” respectivamente.

<?php

    $a = readline("Digite:");
    $b = readline("Digite:");

    if (strcmp($a, $b) == 0)
     { 
       echo 'IGUAL';
     } 
     else 
     { 
       echo 'DIFERENTE'; 
     }

?>
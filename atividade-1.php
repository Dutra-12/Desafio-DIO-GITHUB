// Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5; 

<?php
  
  $a = readline("DIgite um número: ");
  $b = readline("Digite outro número: ");
  $c = $a + $b;
  if ($c > 20)
  {
    $d = $c + 8;
      echo "$c + 8 = $d";
  }
  else if ($c <= 20)
  {
    $e = $c - 5;
      echo "$c - 5 = $e";
  }
  
?>
//Exercício em PHP que receba os valores A, B, C e D. Efetue a soma entre A e C, a multiplicação entre B e D e verifique se o resultado da soma é maior, menor ou igual ao da multiplicação. Imprima: “A+C é maior que B+D”, “A+C é menor que B+D”, “A+C é igual a B+D”;

<?php

  $a = readline("Digite o valor de A: ");
  $b = readline("Digite o valor de B: ");
  $c = readline("Digite o valor de C: ");
  $d = readline("Digite o valor de D: ");
  
  $ac = $a + $b;
  $bd = $b * $d;
  
  if ($ac > $bd)
  {
    echo "A + C é maior que B + D";
  }
  else if ($ac < $bd)
  {
    echo "A + C é menor que B + D";
  }
?>
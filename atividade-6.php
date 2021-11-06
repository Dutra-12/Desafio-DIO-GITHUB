// Efetue um algoritmo PHP que receba os valores A, B e imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: “4 5;

<?php

  $a = readline("Digite o valor de A: ");
  $b = readline("Digite o valor de B: ");
  $c = array($a, $b);
  
  sort($c);
  foreach ($c as $chave => $d) 
  {
    echo "$d ";
  }
?>
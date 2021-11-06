/* Efetue um algoritmo PHP que receba uma string e um caractere de busca e descubra o número de ocorrências deste caractere dentro da string. Para isso utilize laço de repetição, e as funções de string “strlen” e “substr”. */
<?php

  $a = readline("Digite: "); 
  $cb = readline("Digite o caractere de busca: ");
  $quant_letras = strlen($a);

  
  for ($i = 0; $i <= $quant_letras; $i++) {
    if (strripos($a, $cb)) {
      $cont = substr_count($a, $cb);
      break;
    }
  }

  echo "Caractere: $cb" . PHP_EOL;
  echo "Ocorrências: $cont" . PHP_EOL;

?>
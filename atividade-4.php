//Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes);

<?php

  $a = readline('Digite um número: ');
  $b = readline('Digite outro número: ');
  $c = readline('Digite outro número: ');
  $d = array ($a, $b, $c);
  rsort($d);
  foreach( $d as $chave => $e )
  {
    echo "$chave $e\n";
  }
  
?>
// Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes;

<?php 

  $a = readline("Digite um número: ");
  $b = substr($a, -1);
  
  if ($b == 0)
  {
    echo "este número é divisível por 10, 5 e por 2";
  }
  else if ($b == 0 ||  $b == 5)
  {
    echo "Este número é divisivel por 5";
  }
  else if ($b == 0 || $b == 2 || $b == 4 || $b == 6 || $b == 8)
  {
    echo "Este número é divisivel por 2";
  }
  
?>
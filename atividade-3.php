//Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA;

<?php

  $nome = readline("Digite seu nome: ");
  $sexo = readline("Qualseu sexo? Digite F para Feminino ou M para Masculino:");
  $idade = readline("Digite sua idade: ");
  $sexo_conver = strtolower($sexo);
  if ($idade <= 25 and $sexo_conver == 'f')
  {
    echo "$nome:ACEITA";
  }
  else if ($idade > 25 and $sexo_conver =='m')
  {
    echo "$nome: NÃO ACEITA";
  }
  
?>
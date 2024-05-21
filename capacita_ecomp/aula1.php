<?php

// função
function imprimeNoTerminal($informacao){
  echo($informacao . "\n");
}

imprimeNoTerminal(" ");

//variável e print
$jubileu = "Olá mundo!";
imprimeNoTerminal($jubileu);

imprimeNoTerminal(" ");

$jubileu = 5;
imprimeNoTerminal($jubileu);

imprimeNoTerminal(" ");

//loops
for($i = 0; $i < 6; $i++){
  imprimeNoTerminal($i);
}

imprimeNoTerminal(" ");

//arrays
$lista = [1, "oi", "1"];

for($i = 0; $i < 3; $i++){
  imprimeNoTerminal($lista[$i]);
}

imprimeNoTerminal(" ");

//contagem de conteúdo de lista
echo(count($lista));

imprimeNoTerminal(" ");

if(count($lista) == 3)
  echo("\nVerdade\n");
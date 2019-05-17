<?php

print "Digite quantas vezes você deseja repetir a pergunta: ";
$Nnumeros_vezes_rep= fgets(STDIN);

$contador_neg=0;

for ($i=0; $i < $Nnumeros_vezes_rep; $i++) { 
     
    print "Digite um número: ";
    $Numero=fgets(STDIN);

    if ($Numero < 0){

        $contador_neg=$contador_neg+1;

    }
}

print ".$contador_neg números são negativos \n";


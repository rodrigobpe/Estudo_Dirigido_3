<?php

//Faça um algoritmo que leia 15 números inteiros e escreva, para cada número lido, se é
//par ou ímpar.

for ($i=0; $i <15 ; $i++) { 
    print "Digite um número inteiro: ";
    $Num_digitado=fgets(STDIN);

    if($Num_digitado%2==0){

        print "O número $Num_digitado"."É par \n";

    }

    else{
        
        print "O número $Num_digitado"."É ímpar \n";
    }

print" \n";

}



    

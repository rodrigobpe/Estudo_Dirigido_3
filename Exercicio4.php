<?php

//Faça um algoritmo que calcule e escreva a soma dos número pares e a soma dos
//número ímpares entre 1 e 100.

$soma_imp=0;
$soma_par=0;
for ($i=0; $i < 100 ; $i++) { 

    if ($i%2==1){

        
        $soma_imp= $soma_imp+$i;


    }

    else{

      
        $soma_par=$soma_par+$i;
    }

}

print "$soma_imp \n";
print "$soma_par \n";
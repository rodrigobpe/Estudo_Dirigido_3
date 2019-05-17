<?php

print "Digite quantas vezes deseja repetir o programa: ";
$Nnumeros_vezes_rep= fgets(STDIN);

$maior=-999;
$menor=999;


for ($i=0; $i < $Nnumeros_vezes_rep; $i++) { 
    
    echo "Digite o número da sua matricula: ";
    $Num_matricula= fgets(STDIN);

    echo "Digite a sua altura em centimetros: ";
    $altura= (float) fgets(STDIN);
    
        if($altura != 0){
            if($altura<$menor){

                $menor=$altura;

            }

            if($altura>$maior){

                $maior=$altura;

            }
        }
        echo "\n";

        $soma= (float) $soma+$altura;

        $media= (float) $soma/$Nnumeros_vezes_rep;
        
}

echo "O maior atleta tem " . $maior . " cm\n";

echo "O menor atleta tem " . $menor . " cm \n";

echo "A media de altura dos atletas é de: $media \n";
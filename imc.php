<?php

$altura = 1.83;
$peso = 80;

$imc = ($peso / $altura ** 2);
    if ($imc <= 18){
    echo "imc está abaixo" . PHP_EOL;
}   else if ($imc >= 25){
    echo "imc está acima" . PHP_EOL;
}   else{
    echo "imc está normal" . PHP_EOL;
}

echo "$imc";
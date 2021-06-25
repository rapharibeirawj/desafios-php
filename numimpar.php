<?php 

for ($contador = 0 ;//declaração de variavel 
$contador <= 100;//condição 
$contador++)//incrementação 
{
    if ($contador % 2 != 0) {
        echo "$contador" . PHP_EOL;
    }
}
<?php

$pessoas = [
    'Jaime', //0
    'Jorge', //1
    'Robert', //2
];

$pessoas[] = 'Maria'; //3
$pessoas[] = 'Gabriel'; //4
$pessoas[] = 'Rafael'; //5

$pessoas[10] = 'Alisson'; 
$pessoas['ten'] = 'Acley';
$pessoas['dez'] = 'Chiquim';
$pessoas[] = 'Luiz'; 
$pessoas[9] = 'Jefferson';
$pessoas[] = 'Alessandro'; 
$pessoas[6] = 'Alguem';


ksort($pessoas);
foreach ($pessoas as $posicao =>  $cada) {
    echo "{$posicao}: {$cada}", '<br>';
}

// $qtd = count($pessoas);  // 7

// for ($x = 0; $x < $qtd; $x++) {
//     echo $pessoas[$x], '<br>';
// }

echo '<pre>';
print_r($pessoas);


<?php

// Imprimir numeros de 1 a 10 com for
for ($i = 0; $i <= 10; $i++) {
    echo $i . "<br>";
}

// Percorrer um array com for
$frutas = [
    'banana',
    'maca',
    'laranja',
    'melancia'
];

for ($i = 0; $i < count($frutas); $i++){
    echo $frutas[$i] . "<br>";
}
<?php

$courses = [
    10 => 'PHP',
    100 => 'JavaScript',
    1000 => 'Laravel'
];

echo "<pre>";

// --------------------
// ----- MUTABLES -----
// --------------------

sort($courses); // Orden ascendente
/*
Array
(
    [0] => JavaScript
    [1] => Laravel
    [2] => PHP
)
*/

// rsort($courses); // Orden descendente (reverso)
/*
Array
(
    [0] => PHP
    [1] => Laravel
    [2] => JavaScript
)
*/

// ksort($courses); // Ordenar por las key en ascendente
/*
Array
(
    [10] => PHP
    [100] => JavaScript
    [1000] => Laravel
)
*/

// krsort($courses); // Ordenar por las key en descendente (reverso)
/*
Array
(
    [1000] => Laravel
    [100] => JavaScript
    [10] => PHP
)
*/

// array_shift($courses); // Elimina el primer elemento
// array_pop($courses); // Eliminar el último elemento
// array_unshift($courses, 'Java'); // Agrega uno o más elementos al inicio del array
// array_push($courses, 'Java'); // Agrega uno o más elementos al final del array

print_r($courses);

// -----------------------
// ----- NO MUTABLES -----
// -----------------------

// $slice = array_slice($courses, 1); // Extrae una porción de array
// print_r($slice);
/*
Array
(
    [0] => JavaScript
    [1] => Laravel
)
*/

// $chunk = array_chunk($courses, 2); // Divide un array en arrays de menor tamaño
// print_r($chunk);
/*
Array
(
    [0] => Array
        (
            [0] => PHP
            [1] => JavaScript
        )

    [1] => Array
        (
            [0] => Laravel
        )

)
*/

// $flip = array_flip($courses); // Reemplaza las key por los valores, y los valores por las key
// print_r($flip);
/*
Array
(
    [PHP] => 10
    [JavaScript] => 100
    [Laravel] => 1000
)
*/

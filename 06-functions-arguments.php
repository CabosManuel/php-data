<?php

// Argumento simple
function greet($name)
{
    return "Hola, $name";
}
// echo greet('Manuel'); // Hola, Manuel

// Argumento y Paso por Referencia (&)
$course = 'PHP';

function patch(&$course)
{
    $course = 'Laravel';
    echo $course;
}
// patch($course); // Laravel
// echo $course; // Laravel

// Argumento con valor predeterminado
function greet2($name = 'Manuel')
{
    return "Hello, $name";
}
echo greet2(); // Hello, Manuel

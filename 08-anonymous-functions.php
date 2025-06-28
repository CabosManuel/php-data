<?php

$greet = function ($name)
{
    return "Hola, $name";
};

echo $greet('Manuel');
echo "<br>";

function greet(Closure $lang, $name)
{
    return $lang($name);
}

$es = function($name)
{
    return "Hola, $name";
};

$en = function($name)
{
    return "Hello, $name";
};

echo greet($en, 'Alejandro');

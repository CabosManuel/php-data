<?php

// SINGLE QUOTE
echo 'Text line 1
Text line 2
Single Quote (\') backslash (\\)
$name <br>';

// DOBLE QUOTE
// Variables
$name = 'Manuel';
echo "My name is $name<br>";

// Variables complejas
// Array
$courses = [
  'backend' => [
    'PHP',
    'Laravel'
  ]
];
echo "Curso: {$courses['backend'][0]} <br>";

// Class
class User
{
  public $name = 'Manuel';
}
$user = new User;
echo "Nombre: $user->name <br>";

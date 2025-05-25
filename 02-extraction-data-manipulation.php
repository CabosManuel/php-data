<?php

$data = 'I Study PHP';
echo $data[0] . '<br>';
// echo $data{0}; // Deprecado en PHP 7.4. Eliminado en PHP 8

$post = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, in reiciendis! Corporis sint sunt molestias magni suscipit reiciendis. Sit quae delectus animi voluptatibus provident rem, cum nam natus perferendis architecto.";
$extrantion = substr($post, 0, 20);

echo "$extrantion... [Ver más]<br>";

// String to array
$data = 'javascript, php, laravel';
$tags = explode(', ', $data);

echo "<pre>";
var_dump($tags);
echo "</pre>";

// Array to string
$courses = ['javascript', 'php', 'laravel'];
echo implode(', ', $courses);

// Trim spaces
$course = "    Course of PHP  ";
// $course = ltrim($course, " "); // Eliminar espacios izquierda
// $course = rtrim($course, " "); // Eliminar espacios derecha
$course = trim($course);
echo "<pre>";
echo "I want to learn $course, and others";
echo "</pre>";

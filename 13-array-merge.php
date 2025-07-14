<?php

$frontend_courses = ['JavaScript'];
$backend_courses = ['PHP', 'Laravel'];

echo "<pre>";
// print_r($frontend_courses + $backend_courses);
/*
Array
(
    [0] => JavaScript
    [1] => Laravel
)
*/

print_r(array_merge($frontend_courses, $backend_courses));
/*
Array
(
    [0] => JavaScript
    [1] => PHP
    [2] => Laravel
)
*/

$frontend_courses = [
    'frontend' => 'JavaScript'
];
$backend_courses = [
    'backend' => 'PHP',
    'framework' => 'Laravel'
];

// print_r($frontend_courses + $backend_courses);
/*
Array
(
    [frontend] => JavaScript
    [backend] => PHP
    [framework] => Laravel
)
*/

$frontend_courses = [
    'a' => 'JavaScript'
];
$backend_courses = [
    'a' => 'PHP',
    'b' => 'Laravel'
];

print_r(array_merge($frontend_courses, $backend_courses));
/*
Array
(
    [a] => PHP
    [b] => Laravel
)
*/

print_r(array_merge_recursive($frontend_courses, $backend_courses));
/*
Array
(
    [a] => Array
        (
            [0] => JavaScript
            [1] => PHP
        )

    [b] => Laravel
)
*/

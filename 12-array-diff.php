<?php

$courses = ['JavaScript', 'PHP'];
$wishes_courses = ['PHP', 'Laravel', 'JavaScript', 'Vue.js'];

echo "<pre>";
print_r(array_diff($wishes_courses, $courses));

/*
Array
(
    [1] => Laravel
    [3] => Vue.js
)
*/

$array_a = [1, 2, 3, 4, 5];
$array_b = [3, 4, 5, 6, 7];

print_r(array_diff($array_a, $array_b));
/*
Array
(
    [0] => 1
    [1] => 2
)
*/

print_r(array_diff($array_b, $array_a));
/*
Array
(
    [3] => 6
    [4] => 7
)
*/

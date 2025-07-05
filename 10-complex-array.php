<?php

$courses = [
    'frontend' => 'JavaScript',
    'framework' => 'Laravel',
    'backend' => 'PHP',
];

// foreach ($courses as $key => $value) {
//     echo "$key: $value <br>";
// }

function upper($course, $key) {
    echo "$key: " . strtoupper($course) . "<br>";
}

array_walk($courses, 'upper');

echo array_key_exists('backend', $courses) . '<br>';// true
echo in_array('JavaScript', $courses) . '<br>'; // true
echo var_dump(array_keys($courses)) . '<br>'; // array(3) { [0]=> string(8) "frontend" [1]=> string(9) "framework" [2]=> string(7) "backend" }
echo var_dump(array_values($courses)) . '<br>'; // array(3) { [0]=> string(10) "JavaScript" [1]=> string(7) "Laravel" [2]=> string(3) "PHP" }

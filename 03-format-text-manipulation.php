<?php

$text = "<p>PHP is A LANGUAGE</p>";
echo "$text<br>";                 // PHP is A LANGUAGE
echo strtolower($text) . "<br>";  // php is a language
echo strtoupper($text) . "<br>";  // PHP IS A LANGUAGE
echo lcfirst($text) . "<br>";     // pHP is A LANGUAGE
echo ucfirst($text) . "<br>";     // PHP is A LANGUAGE

// Replace characters
$slug = str_replace(' ', '-', $text);
echo strtolower($slug) . "<br>"; // php-is-a-language

// Fill string
$code = 39;
echo str_pad($code, 8, '0', STR_PAD_LEFT) . "<br>"; // 00000039

// Remove HTML tags
echo strip_tags($text) . "<br>";

// MonoByte and MultiByte
$text2 = "Año 2025, programación";
echo strtoupper($text2) . "<br>";     // AñO 2025, PROGRAMACIóN - monobyte
echo mb_strtoupper($text2) . "<br>";  // AÑO 2025, PROGRAMACIÓN - multibyte

var_dump(function_exists('mb_strtoupper'));

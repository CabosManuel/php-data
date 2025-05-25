<?php

$password = '12345678';
var_dump((bool) preg_match('/^[0-9]{6,8}$/', $password));

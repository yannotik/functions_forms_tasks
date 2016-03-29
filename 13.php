<?php
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня';

$fruits = explode(' ', $string);
echo "<pre>";
$array = array_count_values ($fruits);
print_r($array);

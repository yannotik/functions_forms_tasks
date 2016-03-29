<?php

function upperFirstLetter($str){
    $arr = explode('.', $str);
    //print_r($arr);
    foreach($arr as $val){
        echo ucfirst($val) . '.';
    }
}
$str  = "hello world. hello world. hello world. hello world. ";
upperFirstLetter($str);

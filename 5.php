<?php
function showDir($dirName, $searchWord){
    $dir =  scandir($dirName);
    foreach($dir as $val){
        if($val == $searchWord){
            echo "<p>$val</p>";
        }
    }
}
showDir("D:\Yana","wp-tabs");

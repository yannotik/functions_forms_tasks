<form action="" method="post">
    <p><input type="text" name="text"></p>
    <p><input type="submit" name="submit"></p>
</form>

<?php

function reverseString($text){

    $arr = str_split($text);
    $revArr = array_reverse($arr);
    $result = implode("", $revArr);
    echo " $result ";
}
if(isset($_POST['submit'])){
    $text = $_POST['text'];
    reverseString($text);
}


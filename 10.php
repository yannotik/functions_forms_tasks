<form action="" method="post" enctype="multipart/form-data">
    <p><textarea rows="10" cols="30" name="text"></textarea> </p>
    <p><input type="submit" name="submit"></p>
</form>
<?php

function noRepeatWord($text){

    $array = explode(" ", $text);
    $result = array_unique($array);
    echo "<pre>";
    print_r($result);
}



if(isset($_POST['submit'])){
    $text = $_POST['text'];
    noRepeatWord($text);
}
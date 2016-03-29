<html>
<head>
    <title>3</title>

</head>
<body>
<form method="POST" action="">
    <p>длина слова</p>
    <input type="text" name="count">

    <br><br>
    <input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
    $filename = "test.txt";
    $c = $_POST['count'];
    $str=file("test.txt");
    $array = implode(" ", $str);
    $array1 = explode(" ", $array);
    //print_r($array1);

    foreach($array1 as $val){
        if(strlen($val) > $c){
            echo $val . '<br>';
        }
    }




}





?>
</body>
</html>






























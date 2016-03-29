<html>
<head>
    <title>2</title>

</head>
<body>
<form method="post" action="">
    <p>enter text</p>
    <textarea rows="5" cols="25" name="text"></textarea>

    <br>
    <input type="submit" name="change">
</form>
<?php
define("COUNT", 3);

function getCommonWords($mess){
        $array = explode(" ", $mess);
        $max_lenght = $array[0];
        $word = $array[0];
        for($i = 0; $i < COUNT; $i++){
            foreach($array as $k => $value)
            {
                $wordLenght = strlen($value);
                if($wordLenght > $max_lenght)
                {
                    $max_lenght = $wordLenght;
                    $word = $value;
                    unset($value);
                }
            }
            echo $word . '<br>';
        }
}
if(!empty($_POST)) {
    $mess = $_POST['text'];
    getCommonWords($mess);
}
?>
</body>
</html>


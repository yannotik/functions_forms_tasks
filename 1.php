<html>
    <head>
        <title>1</title>
        <style>
            form, div{
                width: 300px;
                margin: 10px auto;
            }
        </style>
    </head>
    <body>
        <form method="post" action="">
            <p>enter text</p>
            <textarea rows="5" cols="25" name="first_text"></textarea>
            <p>enter text</p>
            <textarea rows="5" cols="25" name="second_text"></textarea>
            <br>
            <input type="submit" name="change">
        </form>
        <?php
            function getCommonWords($mess1, $mess2){

                    $array1 = explode(" ", $mess1);
                    $array2 = explode(" ", $mess2);

                    $result = array_intersect($array1, $array2);

                    foreach($result as $val){
                        echo '<div>'. $val . '</div>';
                    }

            }
        if(!empty($_POST)) {
            $mess1 = $_POST['first_text'];
            $mess2 = $_POST['second_text'];

        getCommonWords($mess1, $mess2);
        }
        ?>
    </body>
</html>


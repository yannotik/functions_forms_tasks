<style>
    p{
        margin: 5px;
    }
    input{
        width: 230px;
    }
    .item_comment{
        margin: 20px 0;
    }
</style>

<form method="post" action="">
    <p>Введите имя</p>
    <input type="text" name="userName">
    <p>Введите comment</p>
    <textarea rows="7" cols="30" name="userMessage"></textarea>
    <br>
    <input type="submit" name="submit">
</form>

<?php
$arrayMessage = array();
if(isset($_POST['submit'])) {
    if (is_readable("mess2.txt")) {
        $f = file_get_contents("mess2.txt");
        $messages = unserialize($f);

    }

    if (!empty($_POST)) {
        $newPost['userName'] = htmlspecialchars($_POST['userName']);
        $newPost['userMessage'] = htmlspecialchars($_POST['userMessage']);
        $messages[] = $newPost;

        $messagesList = serialize($messages);
        file_put_contents("mess2.txt", $messagesList);

    }

    if (isset($messages)) {
        $messages = array_reverse($messages);
        $cens = ["bad", "no good"];
        foreach ($messages as $p) {
            foreach ($cens as $word) {
                $p['userName'] = str_replace($word, "Некорректный комментарий", $p['userName']);
                $p['userMessage'] = str_replace($word, "Некорректный комментарий", $p['userMessage']);
            }
                echo "<div class='item_comment'>";
                echo "<p>Пользователь <b> {$p['userName']} </b></p>";
                echo "<p>Оставил комментарий <i>{$p['userMessage']} </i> </p>";
                echo "</div>";
            }
    }

}
?>
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
if(isset($_POST['submit'])){
    if(is_readable("mess.txt")){
        $f = file_get_contents("mess.txt");
        $messages = unserialize($f);

    }

    if(!empty($_POST)){
        $newPost['userName'] = htmlspecialchars($_POST['userName']) ;
        $newPost['userMessage'] = htmlspecialchars($_POST['userMessage']);
        $messages[] = $newPost;

        $messagesList = serialize($messages);
        file_put_contents("mess.txt", $messagesList);

    }

    if(isset($messages)){
        $messages = array_reverse($messages);
        foreach ($messages as $p) {
            echo "<div class='item_comment'>";
            echo "<p>Пользователь <b> {$p['userName']} </b></p>";
            echo "<p>Оставил комментарий <i>{$p['userMessage']} </i> </p>";
            echo "</div>";
        }

    }
}
?>
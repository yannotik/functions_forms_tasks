<form method="post" action="">
    <p>enter directory name</p>
    <input type="text" name="dirName" >

    <input type="submit" name="submit">
</form>
<?php
function sDir($dirName)
{
    if (isset($_POST['submit']))
        $dir = scandir($dirName);
    echo "<ul>";
    foreach ($dir as $k => $itemDir) {
        if($itemDir != '.' && $itemDir != '..') {
            echo "<li>";
            echo $itemDir = iconv("windows-1251", "utf-8", $itemDir);
            echo "</li>";
        }
    }
    echo "</ul>";

}
$dirName = $_POST['dirName'];
sDir($dirName);
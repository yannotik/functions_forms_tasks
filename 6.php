<form action="" method="post" enctype="multipart/form-data">
    <p><input multiple="multiple" type="file" name="filename[]"></p>
    <p><input type="submit" name="submit"></p>
</form>
<?php
if(isset($_POST['submit'])){
    //print_r($_FILES);
    foreach($_FILES['filename']['tmp_name'] as $k => $val){
        move_uploaded_file($_FILES['filename']['tmp_name'][$k], "gallery/".$_FILES['filename']['name'][$k]);
    }

}
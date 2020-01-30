<!-- 
This is An Example of UPLOADING OF MULTIPLE IMAGES AND STORED INTO SINGLE 
COLUMN IN TABLE OF DATABASE.
-->


<?php 
$images_name ="";
    foreach ($_FILES["image"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["image"]["tmp_name"][$key];
            $name = $_FILES["image"]["name"][$key];
            move_uploaded_file($tmp_name, "$uploads_dir/$name");
            $images_name =$images_name.",".$name;
        }
    }

    $sql=mysql_query("INSERT INTO multiimg(image) values('".$images_name."')");

    ?>
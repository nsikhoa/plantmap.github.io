<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<?php
    if(isset($_POST["submit"])){
        //print_r ($_FILES["file"]);
        if($_FILES["file"]["error"] == 0){
            $tmp_name = $_FILES["file"]["tmp_name"];
            $name = $_FILES["file"]["name"];
            $res = move_uploaded_file($tmp_name, "uploadfile/$name");
            if($res){
                echo "Success";
            }
            else{
                echo "Error";
            }
        }
    }
?>
<body>
    <form name="form" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Upload File</legend>
            Chọn tập tin: <input type="file" name="file">
            <input type="submit" value="Upload" name="submit">
        </fieldset>
    </form>
</body>
</html>
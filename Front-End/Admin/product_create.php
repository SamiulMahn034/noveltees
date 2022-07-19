<?php

require 'db_connect.php';
if (isset($_POST["submit"])){
    $name =$_POST["name"];
    if($_FILES["image"]["error"]==4){
        echo
        "<script>alert('image Does Not Exist');</script>";
    }
}
else{
    $filename =$_FILES["image"]["name"];
    $filesize =$_FILES["image"]["size"];
    $tmpname = $_FILES["image"]["tmp_name"];

    $validImageExtention = ['jpg','jpeg','png'];
    $imageExtension = explode('.',$filename);
    $imageExtension=strtolower(end($imageExtension));
    if(!in_array($imageExtension,$validImageExtention)){
        echo
        "<script> alert ('Invalid Image Extention');</script>";
    
    }
    else if($filesize >100000){
        echo"<script>alert ('Image Size is too lerge');</script>";
    }
    else $newImageName =uniqid();
    $newImageName .= '.' . $imageExtension;
    move_uploaded_file($tmpName, 'img/',$newImageName);
    $query= "INSERT INTO products VALUES('','$name','$newImageName')";
}
;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name"><br>
        <label for="image">Image</label>
        <input type="file" name="image" accept=".jpg, .png, .jpeg" value=""><br>
        <label for="price1">price1</label>
        <input type="text" name="price"><br>
        <label for="price2">price2</label>
        <input type="text" name="price2"><br>
        <button type="submit">submit</button>
        
    </form>
</body>
</html>
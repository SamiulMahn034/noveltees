<?php
$conn = mysqli_connect('localhost','root','','fashion');
if(!$conn){
    echo mysqli_connect_error();
}
if(isset($_POST['submit'])){
    $title =$_POST['title'];
    $title =$_POST['title'];
    $price1 =$_POST['price1'];
    $price2 =$_POST['price2'];
   $imagename =  $_FILES['image']['file'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="POST" enctype="multipart/form-data">
     <label for="Title">Tilte</label>
     <input name="title" type="text"><br><br>
     <label for="image">Image</label>
     <input name="file" type="file"><br><br>
     <h2>Price</h2>
     <label for="price1">From</label>
     <input name="price1" type="text"><br><br>
     <label for="price2">To</label>
     <input name="price2" type="text"><br><br>
    <input type="submit" value="Done" name="submit">

    </form>
</body>
</html>
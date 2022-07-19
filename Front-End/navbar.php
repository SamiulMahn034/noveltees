<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body  class="">
<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#30D5C8;height:100px; width:100%;position:fixed;top:0;  ">
  <div class="container-fluid" style='padding-left:200px;'>
  <a class="navbar-brand" href="index.php"><img style="height:90px"src="imeges/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <strong><a class="nav-link active" aria-current="page" href="meet_the_founder.php">HOME</a></strong>
          
        </li>
        <li class="nav-item">
            <strong><a class="nav-link active" aria-current="page" href="#">ALL THINGS CUSTOM</a></strong>
          
        </li>
        <li class="nav-item">
            <strong><a class="nav-link active" aria-current="page" href="#">GALLARY</a></strong>
          
        </li>
        <li class="nav-item dropdown">
          
          <a style="font-weight:bold;" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SHOP COLLECTION
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Ratchet</a></li>
            <li><a class="dropdown-item" href="#">Manifestation</a></li>
            
          </ul>
        </li>

        <li class="nav-item">
            <strong><a class="nav-link active" aria-current="page" href="contact_us.php">CONTACT US</a></strong>
          
        </li>

      </ul>
   
      
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <div style="padding-right:250px;justify-content:space-between">
        <a href="shop.php"><button style="height:40px;width:150px; border-radius:50px;background:black; color:white;">Shop now</button></a>
        <i style="padding-left:20px" class="fa-solid fa-magnifying-glass"></i>
        <i style="padding-left:20px" class="fa-solid fa-cart-shopping"></i>
        </div>
        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
    
    </div>
  </div>
</nav>

</body>
</html>
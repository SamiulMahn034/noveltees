<?php include 'navbar.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body >
<h1 style="color:white;text-align:center;margin-top:150px;" >We love referrals!</h1>
    <form  class="container " style="margin-top:50px;padding-left:320px;color:white; align-items:center;">
    
    
    <div class="form-floating ">
  <input type="text" class="form-control mt-5" style="background:black;color:white;width:70%;" id="floatingInput" placeholder="Name">
  <label for="floatingInput">Name</label>
</div>
<div class="form-floating">
  <input type="email" class="form-control mt-2" style="background:black;color:white;width:70%;" id="floatingPassword" placeholder="Email*">
  <label for="floatingInput">Email</label>
</div>
<div class="form-floating">
  <input type="phone" class="form-control mt-2" style="background:black;color:white;width:70%;" id="floatingPassword" placeholder="Phone">
  <label for="floatingInput">Phone</label>
</div>
<div class="form-floating">
  <textarea class="form-control mt-2" style="background:black;color:white;width:70%;" placeholder="Leave a massage" id="floatingTextarea" rows="3"></textarea>
  <label for="floatingTextarea">Massage</label>
</div>
<button class="mt-5" style="height:40px;width:150px;  font-weight:bold; border-radius:50px;background:#30D5C8; color:black;margin-left:250px;">Submit</button>
    
    </form>
</body>
</html>
<?php include 'footer.php';?>
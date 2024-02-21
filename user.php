<?php

include 'connectdb.php';

//whatever given in input name pass here in post
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];


// insert query 
$sql = "insert into crud (name,email,mobile,password)
values('$name','$email','$mobile','$password')";

// created $result variable to pass the mysql query
$result = mysqli_query($conn,$sql);
if($result){
    // echo "Data inserted successfully";
    header('location:display.php');
}
else{
    echo die(mysqli_error($conn));
}
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>PHP CRUD operation</title>
  </head>
  <body>

<!--in div container is bootstrap class it divide the width between left and right equally----->
<!--in div my-5 is used to  add margin of 5 for top and bottom -->
<!--autocomplete="off"  is used to not get any auto input suggessation in form -->

    <div class="container my-5">

    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" required>
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <button type="submit" class="btn btn-primary" name="button">Cancel</button>
</form>



    </div>

  </body>
</html>
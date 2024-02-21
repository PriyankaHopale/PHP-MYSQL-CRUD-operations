<?php

include 'connectdb.php';
$id = $_GET['updateid'];

//mysqli_fetch_assoc() is used to display the data
 //to get data into input fields after clicking on update 
$sql = "select * from crud where id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

//whatever given in input name pass here in post
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];


// insert query 
$sql = "update crud set id=$id , name = '$name',email = '$email', mobile = '$mobile',password = '$password' where id = $id";

// created $result variable to pass the mysql query
$result = mysqli_query($conn,$sql);
if($result){
    // echo "Data updated successfully";
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
<!--autocomplete="off"  is used to not get any auto input suggestions in form -->

    <div class="container my-5">

    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value="<?php echo $name?>">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value="<?php echo $email?>">
  </div>

  <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value="<?php echo $mobile?>">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value="<?php echo $password?>">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>



    </div>

  </body>
</html>
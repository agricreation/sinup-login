<?php
    include "lib/db.php";
    $email_address=$_POST['email_address'];
    $password=$_POST['password'];
    $sql="select * from signup where email='$email_address' and password='$password'";
    $live=mysqli_query($con,$sql);
    $count= mysqli_num_rows($live);
    if($count>0){
        header ("location: ../livebid.html");
    }
    else{
        echo "error";
    }
?>

<div class="container login">
<form>
<img src="assets/img/logo.png" alt="" width="10%" height="10%">
			<h1 class="h1 mb-3 fw-normal poppins" style="font-weight: 600 !important; font-size:50px;">Agri Creations
    			</h1>
    			<h6 class="h5 mb-3 fw-normal poppins">Login with your account</h6>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_address">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="register.php" class="btn btn-primary">
  Create an account
  </a>
</form>
</div>
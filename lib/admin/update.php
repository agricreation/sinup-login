<?php

include "../load.php";
include "../db.php";

load("_header");
$id=$_GET['updateid'];
echo "$id";
$username = $_POST['usernames'];
$email = $_POST['email_address'];
$password = $_POST['password'];
$phone = $_POST['phone'];
//Form validations
if(isset($_GET['updateid'])){
    $sql=
    "UPDATE `signup` SET
    `username` = '$username',
    `phone` = '$phone',
    `email_address` = '$email_address',
    `password` = '$password'
    WHERE `id` = '$id'";
    $final=mysqli_query($con,$sql);
}
if($final){
    // echo "Updated successfully";
    // header("location: ../../admin.php");
}else{
    die(mysqli_error($con));
}

   ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <main class="form-signin w-100 m-auto container-content">
    <form method="post" class="text-center" action="update.php" >
    <img src="assets/img/logo.png" alt="" width="10%" height="10%">
			<h1 class="h1 mb-3 fw-normal poppins" style="font-weight: 600 !important; font-size:50px;">Agri Creations
    			</h1>
    			<h6 class="h5 mb-3 fw-normal poppins">Please create account</h6>
        <div class="form-floating mt-3">
            <input name="usernames" type="text" class="form-control" id="floatingInputUsername"
                required>
            <label for="floatingInputUsername">Username</label>
        </div>

        <div class="form-floating mt-3">
            <input name="phone" type="text" class="form-control" id="floatingInputUsername"
            required>
            <label for="floatingInputUsername">Phone</label>
        </div>
        <div class="form-floating mt-3">
            <input name="email_address" type="email" class="form-control" id="floatingInput"
                placeholder="user@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mt-3">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
        </div>
        <div class="actions">
        <button class="btn btn-lg btn-primary" type="submit">Update</button>

        </div>
        <!--- username phone email_address password  -->
        <!-- <a href="login.php">Login</a> -->
    </form>
</main>
        </div>
        <div class="col-md-6">
    <!-- Welcome to agri creations -->
</div>
    </div>

</div>
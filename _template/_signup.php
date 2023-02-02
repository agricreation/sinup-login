<?php
$username = $_POST[username];
$email = $_POST[email_address];
$password = $_POST[password];
$phone = $_POST[phone];
signup($username,$email,$password,$phone);
?>
<div class="container">
<main class="form-signin w-100 m-auto">
    <form method="post" class="text-center" action="register.php">
    <img src="assets/img/logo.png" alt="" width="10%" height="10%">
			<h1 class="h1 mb-3 fw-normal poppins" style="font-weight: 600 !important; font-size:50px;">Agri Creations
    			</h1>
    			<h6 class="h5 mb-3 fw-normal poppins">Please create account</h6>
        <div class="form-floating">
            <input name="username" type="text" class="form-control" id="floatingInputUsername"
                placeholder="name@example.com">
            <label for="floatingInputUsername">Username</label>
        </div>

        <div class="form-floating">
            <input name="phone" type="text" class="form-control" id="floatingInputUsername"
                placeholder="name@example.com">
            <label for="floatingInputUsername">Phone</label>
        </div>
        <div class="form-floating">
            <input name="email_address" type="email" class="form-control" id="floatingInput"
                placeholder="user@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="btn btn-lg btn-primary" type="submit">Sign up</button>
        <a href="login.php" class="btn btn-lg btn-primary">
        Create an account
        </a>
        <!--- username phone email_address password  -->
        <!-- <a href="login.php">Login</a> -->
    </form>
</main>
</div>
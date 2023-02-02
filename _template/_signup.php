<div class="container">
<main class="form-signin w-100 m-auto">
    <form method="post" action="signup.php" class="text-center">
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
        <button class="w-50 btn btn-lg btn-primary" type="submit">Sign up</button>
        <a href="login.php">
        <button class="w-50 btn btn-lg btn-primary" >Create an account</button>
        </a>
    </form>
</main>
</div>
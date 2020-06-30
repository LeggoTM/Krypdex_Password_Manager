<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Krypdex - Sign Up!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>

  <?php
$form_err = $success = "";
include "controllers/register_controller.php";
?>


<div class="container-lg" id="home">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="assets/kryptex_logo.svg" width="130" class="d-inline-block align-top" alt="kryptex_logo"
                    loading="lazy">
            </a>
        </nav>
    </div>




 <div class = "container">
 <h2 class="text-center display-4">
            Sign Up!
        </h2>

 <div class="card">
            <div class="card-body">

                     <!-- Sign Up Form -->

                    <form method="post">




                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1conf">Enter password again</label>
                            <input type="password" name="cpass" class="form-control"
                                id="exampleInputPassword1conf" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg">
                                Sign Up
                            </button>
                        </div>



                </form>
                <div class="font-weight-bold">
                    Already have an account? <a href="login.php">Log In!</a>
                </div>
                <div style="margin-top: 10px; text-align: center;">
	<label style="color: red; font-size: 14px;"><?php if ($form_err != "") {echo "{$form_err}";}?></label>
  </div>

  <?php

if ($success == "1") {
    echo "<script type='text/javascript'>alert('Registration Successful. Please check your E-Mail to activate your account.'); window.location = '/login.php';</script>";
} elseif ($success == "2") {
    echo "<script type='text/javascript'>alert('User already exists. Please Activate/Login')</script>";
}

?>

</div>

            </div>
        </div>
    </div>


    </div>
</div>
</div>








</body>

</html>

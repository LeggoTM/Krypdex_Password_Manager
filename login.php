<?php
$form_err = $success = $user_err = "";
include "controllers/login_controller.php";
?>

<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Krypdex</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>

    <div class="container-lg" id="home">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="assets/kryptex_logo.svg" width="130" class="d-inline-block align-top" alt="kryptex_logo"
                    loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold" href="#home">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" data-toggle="modal" data-target="#exampleModalCenter"
                            href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <h2 class="text-center display-4">
            Store your passwords securely!
        </h2>
        <div class="card">
            <div class="card-body">

                <!--Login Form-->

                <form method="post">
                    <p class="font-weight-bold">Log In!</p>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
                </form>
                <div class="mt-4 font-weight-bold">
                    Don't have an account? <a href="register.php">Sign
                        Up!</a>
                </div>
                <div style="margin-top: 10px; text-align: center;">
	<label style="color: red; font-size: 14px;"><?php if ($form_err != "") {echo "{$form_err}";}?></label>
  </div>

  <?php

if ($user_err == "1") {
    echo "<script type='text/javascript'>alert('Incorrect Password')</script>";
} elseif ($user_err == "2") {
    echo "<script type='text/javascript'>alert('User does not exist. Please register and activate your account before logging in.')</script>";
}

?>
            </div>
        </div>
    </div>





    <!--About  Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    A very basic password manager built using PHP and MySQL to store user credentials in encrypted form.
                </div>
            </div>
        </div>
    </div>



















<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>

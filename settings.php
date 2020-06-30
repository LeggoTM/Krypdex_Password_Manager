<?php

$user_err = $del_err = $showalert = "";
include "controllers/settings_controller.php";

?>

<!DOCTYPE HTML>
<html>










<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Krypdex - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

</body><div class="container-lg" id="home">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="dashboard.php">
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
                        <a class="nav-link font-weight-bold" href="dashboard.php">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold"
                            href="settings.php">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-lg">
        <h2 class="text-center display-4">
            Account Settings
        </h2>
      <h3 class="text-left">Change Password</h3>
      <div class="card">
        <div class="card-body">
          <form method="post">
                <div class="form-group">
                  <label for="exampleInputPassword1">Current Password</label>
                  <input class="form-control" id="exampleInputPassword1" type="password" name="cpass" placeholder="Enter Current Password" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">New Password</label>
                  <input class="form-control" id="exampleInputPassword1" type="password" name="npass" placeholder="Enter New Password" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Confirm New Password</label>
                  <input class="form-control" id="exampleInputPassword1" type="password" name="cnpass" placeholder="Confirm New Password" required>
                </div>
                <button type="submit" class="btn btn-primary submit" name="change_pass" value="Add">Change</button>
            </form>
            <div style="margin-top: 15px;">
          <label style="color: red; font-size: 14px; margin-left: 180px;"><?php if ($user_err != "") {echo "{$user_err}";}?></label>
        </div>
        </div>
      </div>
      <h3 class="text-left mt-4">Delete Account</h3>
      <div class="card">
        <div class="card-body">
          <form method="post">
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input class="form-control" id="exampleInputPassword1" type="password" name="cpass" placeholder="Enter Password" required>
                </div>
                <button type="submit" class="btn btn-danger" name="del_acc" value="Add">Delete</button>
            </form>
            <div style="margin-top: 15px;">
          <label style="color: red; font-size: 14px; margin-left: 190px;"><?php if ($del_err != "") {echo "{$del_err}";}?></label>
        </div>
        </div>
      </div>

      <?php

if ($showalert == "1") {
    echo "<script type='text/javascript'>alert('Account Deleted. You will be redirected to the Login Page.'); window.location = '/login.php';</script>";
}

?>












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

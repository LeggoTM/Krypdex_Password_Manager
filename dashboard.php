<?php
global $nopass;
$user_err = $nopass = "";
require_once "controllers/dashboard_controller.php";

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />

  <script type="text/javascript" src="js/dashboard.js"></script>


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
        <h2 class="text-left display-4">
            Your Passwords
        </h2>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                          <th>Name</th>
                          <th>Login ID</th>
                          <th>Password</th>
                        </tr>
                    </thead>
                    <?php

retrievepass($_SESSION['email']);

?>
                </table>
                <div style="text-align: center;">
                  <label><?php if ($nopass != "") {echo "{$nopass}";}?></label>
                </div>
                <div class="text-right">
                  <button type="button" class="btn btn-info" name="showpass" id='showpass'>Show Passwords</button>
                  <button type="button" class="btn btn-danger" onclick="location.href = 'clearall.php';" name="clearall" id='clearall'>Clear All</button>
                </div>
            </div>
        </div>

        <h2 class="text-left display-4 mt-4">
            Add Password
        </h2>
        <div class="card">
          <div class="card-body">

          <form method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Website</label>
                  <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter website name" type="text" name="website" required>

                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Login ID</label>
                  <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" name="loginid" placeholder="Enter Login ID" required>

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Enter Password" required>
                </div>
                <button type="submit" class="btn btn-primary submit" name="add" value="Add">Add</button>
              </form>
              <div style="margin-top: 10px; margin-left: 175px;">
                <label style="color: red; font-size: 14px;"><?php if ($user_err != "") {echo "{$user_err}";}?></label>
              </div>
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

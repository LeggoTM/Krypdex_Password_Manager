<?php
$showdiv = "";
include "controllers/activate_controller.php";
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

  <?php if ($showdiv == "1") {?>

    <div class="container">
      <div class="card">
      <div class="card-body">
        <h1>Activate Account</h1><br>
        <label>Your Account has been activated. You may now login with your credentials.</label>
          <div style="margin-top: 20px;" class="login-help">
            <a href="login.php">Back to Login Page</a>
          </div>
      </div>
      </div>
    </div>


  <?php } elseif ($showdiv == "2") {?>

  <label>Invalid URL</label>

  <?php } elseif ($showdiv == "3") {?>

  <label>Account not activated. There is an error.</label>

  <?php }?>







</body>

</html>

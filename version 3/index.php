<?php
  session_start();
  include ('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EEDMO - Login</title>

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        

        <form method="post">

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
              <label for="username">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" class="form-control" placeholder="Password" required="required">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <button class="btn btn-primary btn-block"  input type="submit" name="login" type="login">LOGIN</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>
</html>

<?php

if(isset($_POST['login'])) {        

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql_users = "SELECT * FROM users WHERE username = '$username' and password='$password'";
  $result_users = $conn->query($sql_users);


  if($result_users->num_rows  == 1) {
    $row = $result_users->fetch_assoc();     

    session_start();  
    $_SESSION['name'] = $row['name'];
    echo "<script>window.open('" . $row["user_type"] . "/" . $row["user_type"] . "_home.php','_self');</script>";
  }
  
} 
?>
<?php
/*
echo md5("123456");
die();
*/
session_start();

include_once('../config.php');

if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])){

  $username = trim($_POST['username']);
  $password = md5(trim($_POST['password']));

  if (checkLogin($username, $password)){
    // Khởi tạo SESSION username và chuyển hướng người dùng vào trang index
    $_SESSION['username'] = $username;
    header('location: index.php');
  } else {
    // Xóa toàn bộ SESSION và chuyển hướng người dùng vào trang login

    session_destroy();
    header('location: login.php');

    
  }


}

function checkLogin($username, $password){
  
  global $conn;
  $sql = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' AND type_user = 1";
  // echo $sql;
  // die;
  
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0)
    return true;
  else
    return false;

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Bootstrap core CSS - SublimeLinter-php - PHPIntel-->
  <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="public/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="email">Username</label>
            <input class="form-control" id="email" type="text" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" id="password" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="public/vendor/jquery/jquery.min.js"></script>
  <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>

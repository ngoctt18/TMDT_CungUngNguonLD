<?php
session_start();

include_once('config.php');
include_once('app/func/jobseeker.php');

if (isset($_SESSION['usernameJK'])) {
  header('location: index.php');
  exit();
} else {

  if (isset($_POST['submit']) && !empty($_POST['usernameJK']) && !empty($_POST['password'])){

    $usernameJK = trim($_POST['usernameJK']);
    $password = md5(trim($_POST['password']));

    if (checkLoginJobseeker($usernameJK, $password)){
      // Khởi tạo SESSION username và chuyển hướng người dùng vào trang index
      $_SESSION['usernameJK'] = $usernameJK;

      $_SESSION['jobseekerAcc'] = getInforJobseekerLogin($_SESSION['usernameJK']);
      
      // var_dump($_SESSION['employerAcc']);die;

      header('location: index.php');
      exit();
      
    } else {
      // Xóa toàn bộ SESSION và chuyển hướng người dùng vào trang login
      session_destroy();
      header('location: jobseekerLogin.php');
      exit();
    }
  }
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
  <title>Nhà tuyển dụng đăng nhập</title>
  <!-- Bootstrap core CSS - SublimeLinter-php - PHPIntel-->
  <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <style type="text/css">
    .card-login {
      max-width: 25rem; 
    }
  </style>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Người tìm việc đăng nhập</div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="email">Tài khoản</label>
            <input class="form-control" id="email" type="text" name="usernameJK" placeholder="Tài khoản">
          </div>
          <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input class="form-control" id="password" type="password" name="password" placeholder="Mật khẩu">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Nhớ mật khẩu</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="submit" href="javascript:void(0)">Đăng nhập</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="jobseekerRegister.php">Đăng ký tài khoản</a>
          <!-- <a class="d-block small" href="forgot-password.php">Quên mật khẩu</a> -->
          <a class="d-block small" href="index.php">Về Trang chủ</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="public/vendor/jquery/jquery.min.js"></script>
  <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

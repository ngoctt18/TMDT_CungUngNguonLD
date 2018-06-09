<?php

include_once('views/_header.php');

$usernameEmployer = $_SESSION['usernameEmployer'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Đăng tin tuyển dụng </title>
    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<style>
/* Credit to bootsnipp.com for the css for the color graph */
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
.employerWaring {
    color: red;
}
</style>

</head>
<body>

<!-- Include the above in your HEAD tag -->

<!-- Page Header -->
<header class="masthead" style="background-image: url('public/img/post-sample-image.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h2>Đăng tin tuyển dụng</h2>
          <span class="subheading">Nhanh chóng, an toàn và hiệu quả!</span>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
    <form role="form" action="" method="post">
      <h2>Đăng tin tuyển dụng <small> Nhanh chóng, an toàn và hiệu quả!</small></h2>
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <label for="username">Tài khoản</label>
            <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Tài khoản" tabindex="1" required>
            <span class="employerWaring"></span>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
              <label for="phone_num">Số điện thoại</label>
            <input type="text" name="phone_num" id="phone_num" class="form-control input-lg" placeholder="Số điện thoại" tabindex="2" required>
          </div>
        </div>
      </div>
      <div class="form-group">
                <label for="representative_name">Tên người đại diện</label>
        <input type="text" name="representative_name" id="representative_name" class="form-control input-lg" placeholder="Tên người đại diện" tabindex="3" required>
      </div>
            <div class="form-group">
                <label for="company_name">Tên công ty</label>
                <input type="text" name="company_name" id="company_name" class="form-control input-lg" placeholder="Tên công ty" tabindex="4" required>
            </div>
      <div class="form-group">
                <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="5" required>
      </div>
            <div class="form-group">
                <label for="address">Địa chỉ</label>
                <input type="text" name="address" id="address" class="form-control input-lg" placeholder="Địa chỉ" tabindex="6" required>
            </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
                        <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Mật khẩu" tabindex="7" required>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
                        <label for="password_confirm">Nhập lại mật khẩu</label>
            <input type="password" name="password_confirm" id="password_confirm" class="form-control input-lg" placeholder="Nhập lại mật khẩu" tabindex="8" required>
                        <span class="employerWaring"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-4 col-sm-3 col-md-3">
         
        </div>
        <div class="col-xs-8 col-sm-9 col-md-9">
           Khi click <strong class="label label-primary">Đăng tin</strong>, nghĩa là bạn đã đồng ý với <a href="#" data-toggle="modal" data-target="#t_and_c_m">Chính sách và điều khoản</a> của chúng tôi, bao gồm cả chính sách về cookie.
        </div>
      </div>
      
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-md-6">
                    <button type="submit" class="btn btn-primary btn-block btn-lg" name="register">Đăng tin</button>
                </div>
      </div>
    </form>
        <br>
  </div>
</div>

  <?php 
  include_once('views/_footer.php');
 ?>
</div>



<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="public/vendor/jquery/jquery.min.js"></script>

</body>
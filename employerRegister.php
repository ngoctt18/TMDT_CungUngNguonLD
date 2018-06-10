<?php 
session_start();

include_once('config.php');
include_once('app/func/employer.php');

include_once('views/_header.php'); 

$checkPassConfirm = false;
$checkUser = false;

if (isset($_SESSION['usernameJK'])) {
    echo "</br></br><center><h2>Bạn phải đăng xuất để thực hiện thành động này!</h2></center>";
    echo "<center><h3>Về <a href=\"index.php\">Trang chủ</a> hoặc <a href=\"jobseekerLogout.php\">Đăng xuất</a></center></h3>";
    die;
}

if (isset($_SESSION['usernameEmployer'])) {
  if (isset($_SESSION['usernameJK'])) {
    unset($_SESSION["usernameJK"]);
  }
  header('location: employerPost.php');
  exit();
} else {

  if (isset($_POST['register'])) {
      if (!empty($_POST['username']) && !empty($_POST['phone_num']) && !empty($_POST['representative_name']) && !empty($_POST['company_name']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['password']) && !empty($_POST['password_confirm'])) {
          if ($_POST['password'] == $_POST['password_confirm']) {
              // Khớp mật khẩu
              $checkPassConfirm = false;
              if (checkUsername($_POST['username'])) {
                  // Tài khoản đã tồn tại
                  $checkUser = true;

              } else {
                  $checkUser = false;
                  //echo "Đăng nhập thành công!";
                  $usernameEmployer = trim($_POST['username']);
                  $passwordEmployer = md5(trim($_POST['password']));

                  if (employerRegister($usernameEmployer, $_POST['phone_num'], $_POST['representative_name'],  $_POST['company_name'], $_POST['email'], $_POST['address'], $passwordEmployer )) {

                    // Khởi tạo SESSION username và chuyển hướng người dùng vào trang employerPost
                    $_SESSION['usernameEmployer'] = $usernameEmployer;
                    $_SESSION['employerAcc'] = getInforEmployerLogin($_SESSION['usernameEmployer']);
                      if (isset($_SESSION['usernameJK'])) {
                        unset($_SESSION["usernameJK"]);
                      }
                    echo "</br></br><center><h2>Bạn đã đăng ký thành công!</h2></center>";
                    echo "<center><h3>Click <a href=\"employerPost.php\">Đăng tin</a></h3> để vào trang đăng tin tuyển dụng</center>";
                    die;


                  } else {
                    // Xóa toàn bộ SESSION và chuyển hướng người dùng vào trang register
                    session_destroy();
                    header('location: employerRegister.php');
                      exit();

                  }
              }
              
          } else {
              // echo "Mật khẩu nhập lại không khớp!";
              $checkPassConfirm = true;

          }
      }
  }

}




 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Nhà tuyển dụng Đăng ký </title>
    <!-- Bootstrap core CSS -->
    <!-- <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Custom fonts for this template -->
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
                        <h1>Nhóm 2</h1>
                        <span class="subheading">A Blog Theme by Ngoc TT</span>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8">
                <form role="form" action="" method="post">
                    <h2>Nhà tuyển dụng Đăng ký</h2>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="username">Tài khoản</label>
                                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Tài khoản" tabindex="1" required>
                                <span class="employerWaring"><?= ($checkUser) ? ' Tài khoản đã tồn tại. Vui lòng thử lại' : ''; ?></span>
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
                        <label for="representative_name">Họ tên người đại diện</label>
                        <input type="text" name="representative_name" id="representative_name" class="form-control input-lg" placeholder="Họ tên người đại diện" tabindex="3" required>
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
                                <span class="employerWaring"><?= ($checkPassConfirm) ? ' Mật khẩu không khớp. Vui lòng thử lại' : ''; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-sm-3 col-md-3">
                            <span class="button-checkbox">
            <!-- <button type="button" class="btn" data-color="info" tabindex="9">  Xác nhận</button> -->
            <!-- <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1" required> -->
          </span>
                        </div>
                        <div class="col-xs-8 col-sm-9 col-md-9">
                            Khi click <strong class="label label-primary">Đăng ký</strong>, nghĩa là bạn đã đồng ý với <a href="#" data-toggle="modal" data-target="#t_and_c_m">Chính sách và điều khoản</a> của chúng tôi, bao gồm cả chính sách về cookie.
                        </div>
                    </div>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <button type="submit" class="btn btn-primary btn-block btn-lg" name="register">Đăng ký</button>
                        </div>
                    </div>
                </form>
                <br>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <h2>Bạn đã có tài khoản?</h2>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <a href="employerLogin.php" class="btn btn-success btn-block btn-lg">Đăng nhập</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Tôi đồng ý</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <?php 

  include_once('views/_footer.php');
 ?>
    </div>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="public/vendor/jquery/jquery.min.js"></script>
    <!-- <script src="public/vendor/bootstrap/js/bootstrap.min.js"></script> -->
    <script>
    $(function() {
        $('.button-checkbox').each(function() {

            // Settings
            var $widget = $(this),
                $button = $widget.find('button'),
                $checkbox = $widget.find('input:checkbox'),
                color = $button.data('color'),
                settings = {
                    on: {
                        icon: 'glyphicon glyphicon-check'
                    },
                    off: {
                        icon: 'glyphicon glyphicon-unchecked'
                    }
                };

            // Event Handlers
            $button.on('click', function() {
                $checkbox.prop('checked', !$checkbox.is(':checked'));
                $checkbox.triggerHandler('change');
                updateDisplay();
            });
            $checkbox.on('change', function() {
                updateDisplay();
            });

            // Actions
            function updateDisplay() {
                var isChecked = $checkbox.is(':checked');

                // Set the button's state
                $button.data('state', (isChecked) ? "on" : "off");

                // Set the button's icon
                $button.find('.state-icon')
                    .removeClass()
                    .addClass('state-icon ' + settings[$button.data('state')].icon);

                // Update the button's color
                if (isChecked) {
                    $button
                        .removeClass('btn-default')
                        .addClass('btn-' + color + ' active');
                } else {
                    $button
                        .removeClass('btn-' + color + ' active')
                        .addClass('btn-default');
                }
            }

            // Initialization
            function init() {

                updateDisplay();

                // Inject the icon if applicable
                if ($button.find('.state-icon').length == 0) {
                    $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
                }
            }
            init();
        });
    });
    </script>
</body>